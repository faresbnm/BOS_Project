<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class sendMail extends Controller
{
    public function send(Request $request){
        try{
            $mail = new PHPMailer(true);
            //Server settings
            $mail->isSMTP();                                           
            $mail->Host       = 'smtp.gmail.com';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'benameurmessagerie@gmail.com';                    
            $mail->Password   = 'vbfhpdjjvfelbvbp';                            
            $mail->SMTPSecure = 'ssl';    
            $mail->Port       = 465;  
        
        
            $mail->setFrom($request->email);
            $mail->addAddress('benameurmessagerie@gmail.com');
            
            $mail->isHTML(true);                                 
            $mail->Subject = $request->name;
            $mail->Body    = "name:  $request->name <br> email:  $request->email <br> phone: $request->number <br> message
            : $request->message";
        
            $mail->send();
            if($mail->send()){
                return redirect()->back()->with('success', 'Your message has been sent!');

            }
        }catch(Exception $e){
            return redirect()->back()->with('error', 'oops, there is something wrong');
        }
    }
}
