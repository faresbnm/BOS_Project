<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class secure
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedRoutes = ['/', '/about', '/services', '/contact'];

        $currentRoute = $request->path();

        if (!in_array($currentRoute, $allowedRoutes) && !$this->isFileRequest($request)) {
            return redirect()->back();
        }
        return $next($request);
    }

        /**
     * Determine if the request is for an existing file.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return bool
     */
    protected function isFileRequest(Request $request)
    {
        // Get the requested path
        $path = $request->path();
        $restrictedFiles = ['.htaccess'];


        // Check if the path corresponds to an existing file
        return in_array(basename($path), $restrictedFiles);
    }
}
