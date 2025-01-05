@extends('template_Web.layout')

@section('content')
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
@endsection