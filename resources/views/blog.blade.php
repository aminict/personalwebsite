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
 <!--  <div class="intro intro-single route bg-image" style="background-image: url({{url('img/overlay-bg.jpg')}})">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4">Blog Details</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="#">Library</a>
            </li>
            <li class="breadcrumb-item active">Data</li>
          </ol>
        </div>
      </div>
    </div>
  </div> -->
  <!--/ Intro Skew End /-->

  <!--/ Section Blog-Single Star /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
     <!-- <div class="row">-->
        <div class="col-md-12">
          <div class="post-box">
            <div class="post-thumb">
          <small> Created at: {{$data->created_at->diffForHumans()}}</small>
               <small class="pull-right"> Category: {{$data->category->name}}</small>
              <img src="{{ URL::to('/') }}/postimage/{{ $data->image }}" class="img-fluid" alt="">
            </div>
            <div class="post-meta">
              <h1 class="article-title">{{$data->title}}</h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#">{{$data->user->name}}</a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#">{{$data->category->name}}</a>
                </li>
               <!--  <li>
                  <span class="ion-chatbox"></span>
                  <a href="#">14</a>
                </li> -->
              </ul>
            </div>
            <div class="article-content">
              <p>
                {!!$data->description!!}
              </p>
              
            </div>
          </div>
          <!-- <div class="box-comments">
            <div class="title-box-2">
              <h4 class="title-comments title-left">Comments (34)</h4>
            </div>
            <ul class="list-comments">
              <li>
                <div class="comment-avatar">
                  <img src="{{url ('img/testimonial-2.jpg')}}" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li>
                <div class="comment-avatar">
                  <img src="{{url ('img/testimonial-4.jpg')}}" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Carmen Vegas</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio, at qui beatae ducimus placeat debitis voluptates amet corporis,
                    veritatis deserunt.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li class="comment-children">
                <div class="comment-avatar">
                  <img src="{{url ('img/testimonial-2.jpg')}}" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
              <li>
                <div class="comment-avatar">
                  <img src="{{url ('img/testimonial-2.jpg')}}" alt="">
                </div>
                <div class="comment-details">
                  <h4 class="comment-author">Oliver Colmenares</h4>
                  <span>18 Sep 2017</span>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores reprehenderit, provident cumque
                    ipsam temporibus maiores
                    quae natus libero optio.
                  </p>
                  <a href="3">Reply</a>
                </div>
              </li>
            </ul>
          </div> -->
         <!--  <div class="form-comments">
            <div class="title-box-2">
              <h3 class="title-left">
                Leave a Reply
              </h3>
            </div>
            <form class="form-mf">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="text" class="form-control input-mf" id="inputName" placeholder="Name *" required>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <div class="form-group">
                    <input type="email" class="form-control input-mf" id="inputEmail1" placeholder="Email *" required>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="url" class="form-control input-mf" id="inputUrl" placeholder="Website">
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <textarea id="textMessage" class="form-control input-mf" placeholder="Comment *" name="message"
                      cols="45" rows="8" required></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                </div>
              </div>
            </form>
          </div> -->
        </div>
       <!--  <div class="col-md-4">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Search</h5>
            <div class="sidebar-content">
              <form>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Recent Post</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">{{$data->title}}</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Archives</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">September, 2017.</a>
                </li>
                <li>
                  <a href="#">April, 2017.</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Tags</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <a href="#">Web.</a>
                </li>
                <li>
                  <a href="#">Design.</a>
                </li>
                <li>
                  <a href="#">Travel.</a>
                </li>
                <li>
                  <a href="#">Photoshop</a>
                </li>
                <li>
                  <a href="#">Corel Draw</a>
                </li>
                <li>
                  <a href="#">JavaScript</a>
                </li>
              </ul>
            </div>
          </div>
        </div> 
      </div>-->
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

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
