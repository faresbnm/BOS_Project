@extends('master.master')
@section('content')
    <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2 data-aos="fade-in" data-aos-duration="1500"> Our Services </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div data-aos-duration="1500" data-aos="fade-up" class="box ">
            <div class="img-box">
                <i class="fa-solid fa-house-chimney-window" style="color: #000000;font-size:60px;"></i>            </div>
            <div class="detail-box">
              <h5>
                Camps Refurbishment 
              </h5>
              <p style="  overflow: hidden;
              text-overflow: ellipsis;
              -webkit-line-clamp: 3; /* Limiting to 3 lines */
              -webkit-box-orient: vertical;
              display: -webkit-box;">
                Reinventing Comfort and Functionality

                Our Camps Refurbishment service is designed to provide a comfortable and safe environment for your personnel in remote locations. Whether you need to upgrade existing facilities or create new ones, we offer the following:
                
                Camp Design and Planning: We design layouts that maximize space utilization, comfort, and safety.
                
                Structural Refurbishment: Renovation, repair, and structural improvements to ensure long-lasting functionality.
                
                Amenities and Interiors: We enhance the interior of the camps with modern amenities and furnishings.
                
                Health and Safety Compliance: Our team ensures that the camps meet all health and safety regulations.
                
              </p>
              <div class="btn-box">
                <a class="readMoreBtn" data-modal-id="modal1" style="cursor: pointer" id="readMoreBtn1">
                  View More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div data-aos-duration="1500" data-aos="fade-down" class="box ">
            <div class="img-box">
                <i class="fa-solid fa-truck-arrow-right" style="color: #000000;font-size:60px;"></i>            </div>
            <div class="detail-box">
              <h5>
                Rig Move 
              </h5>
              <p style="  overflow: hidden;
              text-overflow: ellipsis;
              -webkit-line-clamp: 3; /* Limiting to 3 lines */
              -webkit-box-orient: vertical;
              display: -webkit-box;">
                Efficient and Safe Relocation of Assets

                Our Rig Move service ensures that your drilling rigs are relocated efficiently and safely. We offer a range of services to support this critical operation:
                
                Site Assessment: Thorough site evaluation to plan the move effectively.
                
                Transportation: Specialized equipment and experienced teams for rig transportation.
                
                Site Preparation: Preparing the new site for rig installation.
                
                Installation and Setup: Rig installation, testing, and commissioning.
                
                Safety Assurance: Rig moves are conducted with strict adherence to safety protocols.
                
              </p>
              <div class="btn-box">
                <a style="cursor: pointer" class="readMoreBtn" data-modal-id="modal2">
                  View More
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div data-aos-duration="1500" data-aos="fade-up" class="box ">
            <div class="img-box">
                <i class="fa-solid fa-paint-roller" style="color: #000000;font-size:60px;"></i>            </div>
            <div class="detail-box">
              <h5>
                Sand Blasting & Painting 
              </h5>
              <p style="  overflow: hidden;
              text-overflow: ellipsis;
              -webkit-line-clamp: 3; /* Limiting to 3 lines */
              -webkit-box-orient: vertical;
              display: -webkit-box;">
                Reviving Structures, Protecting Surfaces

                Our Sand Blasting & Painting service is geared towards preserving the longevity and aesthetics of your petroleum infrastructure. We offer:
                
                Surface Preparation: High-quality sandblasting to remove rust, corrosion, and old paint.
                
                Coating Application: Expert application of protective coatings for durability.
                
                Customized Solutions: Tailored to specific environmental and durability requirements.
                
                Environmental Responsibility: We prioritize eco-friendly coatings and waste management.
                
              </p>
              <div class="btn-box">
                <a style="cursor: pointer" class="readMoreBtn" data-modal-id="modal3">
                  View More
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-6 mx-auto">
          <div data-aos-duration="1500" data-aos="fade-up" class="box ">
            <div class="img-box">
                <i class="fa-solid fa-circle-plus" style="color: #000000;font-size:60px;"></i>            </div>
            <div class="detail-box">
              <h5>
                More Services
              </h5>
              <p style="text-align: left;">
                - Vehicle rentals with & without drivers <br>
                - Different Equipment rental <br>
                - Technical inspection <br>
                - Logistics consulting <br>
                - Commercial consulting <br>
                - Business development <br>
                - Commercial representative <br>
                - Control & welding services <br>
                - Installation, repair & maintenance of different electrical or industrial equipment <br>
                - Provision of all kind of supplies to different Base de vie
              </p>
            </div>
          </div>
        </div>
    </div>

<div id="modal1" class="modal">
    <div class="modal-content">
        <span id="close1"  class="close">&times;</span>
        <center><i class="fa-solid fa-house-chimney-window" style="color: #000000;font-size:50px;"></i> <br> 
        <h2>Camps Refurbishment</h2></center>
        <p>Reinventing Comfort and Functionality

Our Camps Refurbishment service is designed to provide a comfortable and safe environment for your personnel in remote locations. Whether you need to upgrade existing facilities or create new ones, we offer the following: <br> <br>

- Camp Design and Planning: We design layouts that maximize space utilization, comfort, and safety. <br>

- Structural Refurbishment: Renovation, repair, and structural improvements to ensure long-lasting functionality. <br>

- Amenities and Interiors: We enhance the interior of the camps with modern amenities and furnishings. <br>

- Health and Safety Compliance: Our team ensures that the camps meet all health and safety regulations.
</p> <br><br>
<center>
  <img src="{{asset('images/camps/Picture1.jpg')}}" class="img-fluid" alt="...">
</center>

    </div>
</div>

<div id="modal2" class="modal">
    <div class="modal-content">
        <span id="close2"  class="close">&times;</span>
        <h2><center>                <i class="fa-solid fa-truck-arrow-right" style="color: #000000;font-size:60px;"></i> <br>     Rig Move     </center>         </h2>
        <p>Efficient and Safe Relocation of Assets

          Our Rig Move service ensures that your drilling rigs are relocated efficiently and safely. We offer a range of services to support this critical operation:  <br> <br>
          
          - Site Assessment: Thorough site evaluation to plan the move effectively. <br>
          
          - Transportation: Specialized equipment and experienced teams for rig transportation.  <br>
          
          - Site Preparation: Preparing the new site for rig installation. <br>
          
          - Installation and Setup: Rig installation, testing, and commissioning. <br>
          
          - Safety Assurance: Rig moves are conducted with strict adherence to safety protocols.
          </p> <br> <br>
          <center><img width="100%" src="{{asset('images/rig/Picture2.jpg')}}" class="img-fluid" alt="..."></center>
    </div>
</div>

<div id="modal3" class="modal">
    <div class="modal-content">
        <span id="close3" class="close">&times;</span>
        <h2><center>                <i class="fa-solid fa-paint-roller" style="color: #000000;font-size:60px;"></i>     <br>     Sand Blasting & Painting</center> </h2>
        <p>Reviving Structures, Protecting Surfaces

          Our Sand Blasting & Painting service is geared towards preserving the longevity and aesthetics of your petroleum infrastructure. We offer: <br> <br>
          
          - Surface Preparation: High-quality sandblasting to remove rust, corrosion, and old paint. <br>
          
          - Coating Application: Expert application of protective coatings for durability. <br>
          
          - Customized Solutions: Tailored to specific environmental and durability requirements. <br>
          
          - Environmental Responsibility: We prioritize eco-friendly coatings and waste management. <br>
          </p>
          <center><img width="100%" src="{{asset('images/sandblasting/Picture1.jpg')}}" class="img-fluid" alt="..."></center>

    </div>
</div>

  </section>

  <!-- end service section -->

  <script>
// Get all Read More buttons
var buttons = document.querySelectorAll(".readMoreBtn");

// Loop through each button and attach click event listener
buttons.forEach(function(button) {
  // Get the modal associated with the button
  var modalId = button.getAttribute("data-modal-id");
  var modal = document.getElementById(modalId);

  // Get the close button for the modal
  var closeBtn = modal.querySelector(".close");

  // When the button is clicked, open the corresponding modal
  button.onclick = function() {
    modal.style.display = "block";
  }

  // When the close button is clicked, close the modal
  closeBtn.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
});
  </script>
@endsection