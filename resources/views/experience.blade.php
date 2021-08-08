<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kaisar Ahmed Khan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ url ('img/testimonial-2.jpg') }}" rel="icon">
  <link href="{{ url ('img/testimonial-2.jpg') }}" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="{{ url ('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url ('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url ('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url ('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ url ('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ url ('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/new.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  @include('navbar')
  <!--/ Nav End /-->
  <!--/ Section experience Star /-->
   <section class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            
            
          </div>
        </div>
      </div> <br><br>
      @foreach($data as $row)
      <div class="row">
        <div class="col-md-12">
          <div class="service-box">
            <div class="service-content">
			  <div class="title-box text-center">
            <h3 class="title-a">
              {{$row->title}}
            </h3>
            <div class="line-mf"></div>
          </div>
              <p class="s-description text-justify">
               {!!$row->ExperienceDec!!}
              </p>
			   
            </div>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </section>
  <!--/ Section experience End /-->
  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Kaisar Ahmed Khan</strong>. All Rights Reserved</p>
              <div class="credits">
                Developed by <a href="#">Md. Nurul Amin</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <!--/ Section jsfile End /-->
  
  
</body>
</html>
