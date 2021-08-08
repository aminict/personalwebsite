<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kaisar Ahmed Khan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

 

  <!-- Bootstrap CSS File -->
  <link href="{{ url ('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ url ('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ url ('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ url ('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <!--<link href="{{ url ('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">-->
  <link href="{{ url ('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ url ('css/new.css') }}" rel="stylesheet">
</head>


<body>
   <!--/ Nav Star /-->
  @include('navbar')
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->

     <section class="blog-mf sect-pt4 route">
        <div class="container">
        <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">

                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="title-box text-center">
                  <h3 class="title-a">
                    All Post of {{$data->name}}
                  </h3>
                  <div class="line-mf"></div>
                </div>
               
                  @foreach($data->posts as $row)
                    <h1>
                  <!--  <h3 class="card-title"><a href="{{ route('post.show',[$row->id]) }}">{{$row->title}} ||See Details</a></h3> -->
                <ul>
              
                <li>
                  <a href="{{ route('post.show',$row->id) }}">{{$row->title}}</a>
                </li>
                 </ul>
                 </h1>
                 @endforeach
             
               
              </div>
            </div>
          </div>
        </section>
    
  <!--/ Intro Skew End /-->



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
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('lib/popper/popper.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/counterup/jquery.counterup.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
  <script src="{{ asset('lib/typed/typed.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js') }}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>
  <!--/ Section jsfile End /-->

</body>
</html>
