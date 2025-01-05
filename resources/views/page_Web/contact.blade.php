@extends('template_Web.layout')

@section('content')
    <!-- contact section start -->
    <div class="contact_section layout_padding">
         <div class="container-fluid">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="contact_taital">Get In Touch</h1>
                     <form action="">
                        <div class="mail_section_1">
                           <input type="text" class="mail_text" placeholder="Name" name="Name">
                           <input type="text" class="mail_text" placeholder="Phone Number" name="Phone Number"> 
                           <input type="text" class="mail_text" placeholder="Email" name="Email">
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                           <div class="send_bt"><a href="#">SEND</a></div>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-6 padding_right0">
                     <div class="map_main">
                        <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10882.908081567435!2d110.48968428831192!3d-7.038510340433094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708de9dbd7bc21%3A0x95fccba9fd87cd06!2sJl.%20Pucang%20Indah%20V%2C%20Pucanggading%2C%20Batursari%2C%20Kec.%20Mranggen%2C%20Kabupaten%20Demak%2C%20Jawa%20Tengah%2059567!5e0!3m2!1sid!2sid!4v1733477089360!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
@endsection