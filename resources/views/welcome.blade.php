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
  
  <!--/ about start /-->
  <!--/ Intro Skew Star /-->
  <div class="section-counter paralax-mfs"></div>
    @foreach($slider as $slid)

  <div class="intro route bg-image" style="background-image: url({{ URL::to('/') }}/sliderimage/{{ $slid->image }})">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">{{$slid->title}}</h1>
          <p class="intro-subtitle"><span class="text-slider-items">{{$slid->message}} </span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <!--/ Intro Skew End /-->
   <!--/ Home paage start /-->
   <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  @foreach($data as $row)
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="{{ URL::to('/') }}/postimage/{{ $row->image }}" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>{{$row->name}}</span></p>
                      <p><span class="title-s">Certificate: </span> <span>{{$row->profile}}</span></p>
                      <p><span class="title-s">Email: </span> <span>{{$row->email}}</span></p>
                      <p><span class="title-s">Phone: </span> <span>{{$row->phone}}</span></p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <p class="title-s">Skill</p>
                  <span>linux</span> <span class="pull-right">99%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>Windows</span> <span class="pull-right">97%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>System security</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  <span>System automation</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
            
                  <span>VMware</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  
                  <span>Virtualization</span> <span class="pull-right">95%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  
                  <span>Team management</span> <span class="pull-right">94%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  
                   <span>Cloud</span> <span class="pull-right">93%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  
                   <span>DevOps</span> <span class="pull-right">90%</span>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                      aria-valuemax="100"></div>
                  </div>
                  
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      {{$row->title}}
                    </h5>
                  </div>
                  <p class="lead" align="justify">
                   {!!$row->profilesms!!}
                  </p>
                  
                  @endforeach
                  <!--<p class="lead">
                    Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                    Nulla porttitor accumsan
                    tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                  </p>-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--/ Home paage end /-->
  <!--/ about End /-->
  

  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/counters-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">120</p>
              <span class="counter-text">WORKS COMPLETED</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">17</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">78</p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">5</p>
              <span class="counter-text">AWARD WON</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



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


















<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>-->
