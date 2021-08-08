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
   <!--/ about start /-->
  <!--/ Intro Skew Star /-->

  <!--/ Section Contact-Footer Star /-->
  
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div class="box-shadow-full">

              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                   <form  action="{{route('usersms.store')}}" method="POST">
					          @csrf
                      @if (Session ::has('success'))
		             <div class="alert alert-danger alert-block">
		              <button type="button" class="close" data-dismiss="alert">×</button>
		              <strong>{{Session::get('success') }}</strong>
		             </div>
		             @endif

		            @if (Session ::has('danger'))
		             <div class="alert alert-danger alert-block">
		              <button type="button" class="close" data-dismiss="alert">×</button>
		              <strong>{{Session::get('danger') }}</strong>
		             </div>
		             @endif


		             @if (count($errors) > 0)
		              <div class="alert alert-danger">
		               <ul>
		               @foreach($errors->all() as $error)
		                <li>{{ $error }}</li>
		               @endforeach
		               </ul>
		              </div>
		             @endif
             
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  @foreach($data as $row)
            	
                  <div class="more-info">
                    <!--<p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p>-->
                    <ul class="list-ico">
                      <li><span class="ion-ios-person-outline"></span> {{$row->name}}</li>
					            <li><span class="ion-email"></span>{{$row->email}}</li>
                      <li><span class="ion-ios-telephone"></span>{{$row->phone}}</li>
                    </ul>
                  </div>
                   @endforeach
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
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



