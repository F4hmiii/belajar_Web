@extends('template_Web.layout')

@section('content')
     <!-- banner section start -->
     <div class="banner_section">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h1 class="banner_taital">{{ $title }}</h1>
                              <p class="banner_text">{{ $content }}</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h1 class="banner_taital">Lumintu Service </h1>
                              <p class="banner_text">Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing h</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-12">
                              <h1 class="banner_taital">Electricity Service </h1>
                              <p class="banner_text">Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing h</p>
                              <div class="read_bt"><a href="#">Read More</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- service section start -->
      <div class="service_section layout_padding">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="service_taital">{{ $title2 }}</h1>
               </div>
            </div>
            <div class="service_section_2">
               <div class="row">
                  <div class="col-lg-3 col-sm-6">
                     <div class="service_box">
                        <div class="building_icon"><img src="{{ asset('web') }}/images/building-icon.png"></div>
                        <h4 class="residential_text">Residential Services</h4>
                        <p class="service_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
                     </div>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="service_box ">
                        <div class="building_icon"><img src="{{ asset('web') }}/images/flash-icon.png"></div>
                        <h4 class="residential_text">Commercial Services</h4>
                        <p class="service_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
                     </div>
                     <div class="readmore_bt "><a href="#">Read More</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="service_box">
                        <div class="building_icon"><img src="{{ asset('web') }}/images/industrial-icon.png"></div>
                        <h4 class="residential_text">Industrial Services</h4>
                        <p class="service_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
                     </div>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                     <div class="service_box">
                        <div class="building_icon"><img src="{{ asset('web') }}/images/bulb-icon.png"></div>
                        <h4 class="residential_text">Electrical Services</h4>
                        <p class="service_text">alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything</p>
                     </div>
                     <div class="readmore_bt"><a href="#">Read More</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- service section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="about_taital">About Our Lumintu Store</h1>
               </div>
            </div>
         </div>
      </div>
      <div class="about_section_2 layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_taital_main">
                     <h1 class="slightly_text">Slightly believable. If you are going</h1>
                     <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                     <div class="readmore_btn"><a href="#">Read More</a></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="about_img"><img src="{{ asset('web') }}/images/about-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="testimonial_taital">Customers Testimonial</h1>
                  <p class="testimonial_text">Even slightly believable. If you are going to use a passage </p>
               </div>
            </div>
            <div id="my_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="testimonial_section_2">
                        <div class="testimonial_left">
                           <div class="client_img"><img src="{{ asset('web') }}/images/client-img.png"></div>
                        </div>
                        <div class="testimonial_right">
                           <h4 class="markro_text">Markro</h4>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle </p>
                           <div class="quick_icon"><img src="{{ asset('web') }}/images/quick-icon.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="testimonial_section_2">
                        <div class="testimonial_left">
                           <div class="client_img"><img src="{{ asset('web') }}/images/client-img.png"></div>
                        </div>
                        <div class="testimonial_right">
                           <h4 class="markro_text">Markro</h4>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle </p>
                           <div class="quick_icon"><img src="{{ asset('web') }}/images/quick-icon.png"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="testimonial_section_2">
                        <div class="testimonial_left">
                           <div class="client_img"><img src="{{ asset('web') }}/images/client-img.png"></div>
                        </div>
                        <div class="testimonial_right">
                           <h4 class="markro_text">Markro</h4>
                           <p class="many_text">many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle </p>
                           <div class="quick_icon"><img src="{{ asset('web') }}/images/quick-icon.png"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- shop section start -->
      <div class="shop_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="shop_taital">Do you need any help for <span style="color: #f9b116;">electricity ?</span></h1>
                  <p class="shop_text">Lorem ipsum dolor sit amet, consectetur adipiscing elitLorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                  <div class="btn_main">
                     <div class="quote_bt"><a href="#">Get A Quote</a></div>
                     <div class="call_bt active"><a href="contact.html">Call Now</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- shop section end -->
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
                           <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="470" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
@endsection