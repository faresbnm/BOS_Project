 @extends('master.master')
 @section('content')
     <!-- contact section -->

 <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form id="contactForm" action="{{route('contact')}}" method="post">
            @csrf
            <div>
              <input type="text" name="name" required placeholder="Name" />
            </div>
            <div>
              <input type="text" name="number" required placeholder="Phone Number" />
            </div>
            <div>
              <input type="email" name="email" required placeholder="Email" />
            </div>
            <div>
              <input type="text" name="message" required class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap" style="width:100%;height:100%;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21860.4585099461!2d3.0611493415529205!3d36.70368022920202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128fad272c8829d3%3A0x20d5512ccd99f4dd!2sA%C3%AFn%20Naadja%2C%20Djasr%20Kasentina!5e0!3m2!1sfr!2sdz!4v1713132756497!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->
 @endsection
 
 