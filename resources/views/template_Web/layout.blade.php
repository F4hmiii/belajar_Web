<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Lumintu</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('web') }}/css/bootstrap.min.css">
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('web') }}/css/style.css">
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('web') }}/css/responsive.css">
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('web') }}/images/fevicon.png" type="image/gif" />
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('web') }}/css/jquery.mCustomScrollbar.min.css">
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('web') }}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{ asset('web') }}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
      <script src="{{ asset('web') }}/assets/js/config.js"></script>
   </head>
    @include('template_Web.navbar')
    
    @yield('content')
    
    @include('template_Web.footer')

          <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2024 website buy and sell <a href="https://html.design">our apple products second hand</a> by Fahmi Zain </p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('web') }}/js/jquery.min.js"></script>
      <script src="{{ asset('web') }}/js/popper.min.js"></script>
      <script src="{{ asset('web') }}/js/bootstrap.bundle.min.js"></script>
      <script src="{{ asset('web') }}/js/jquery-3.0.0.min.js"></script>
      <script src="{{ asset('web') }}/js/plugin.js"></script>
      <!-- sidebar -->
      <script src="{{ asset('web') }}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{ asset('web') }}/js/custom.js"></script>
</body>
</html>