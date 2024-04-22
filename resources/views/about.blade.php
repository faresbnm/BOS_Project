@extends('master.master')
@section('content')
    

<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p style="text-align: justify;">

                More than Twenty-Nine years of much diversified experience and direct operations, construction, supply chain and management with National & international experience utilizing extensive engineering and construction operations knowledge, good motivation and leadership skills to successfully complete projects. Our main target is to deliver safe, efficient and trouble-free different services to our different customers. In pursuit of this goal, we continually refine our methodologies, embrace emerging technologies, and prioritize customer satisfaction at every stage of our operations. By fostering a culture of innovation and collaboration, we strive to exceed expectations and set new benchmarks for excellence within the industry.            </p>
            <a href="{{url('/contact')}}">
              Get in  Touch
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="images/about-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  @endsection
