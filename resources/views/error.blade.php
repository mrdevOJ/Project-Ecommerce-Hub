<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIP Hub | error</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
     <!-- navbar-->
      <!-- navbar-->
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
          <div class="col-lg-6 offer mb-3 mb-lg-0"><a href="#" class="btn btn-primary btn-sm">Offre du jour</a><a href="#" class="ml-1">Obtenez 35% de rabais sur les commandes de plus de 50 $!</a></div>
            <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
              @guest
                            @if (Route::has('login'))

                <li class="list-inline-item"><a href="{{ route('login') }}">Login</a></li>
                            @endif

@if (Route::has('register'))
<li class="list-inline-item"><a href="{{ route('register') }}" >Register</a></li>

@endif
@else
                            <li class="list-inline-item">
                                <a id="navbarDropdown" class="nav-link  text-light" href="#" role="button" >
                                    {{ Auth::user()->name }}
                                </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                            @endguest

              </ul>
            </div>
          </div>
        </div>

          <!-- *** TOP BAR END ***-->


        </div>
        <nav class="navbar navbar-expand-lg">
          <div class="container"><a href="index.html" class="navbar-brand home">
          <span class="sr-only">Accuile</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only"> navigation</span><i class="fa fa-align-justify"></i></button>
              <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only"> search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link active ">Accuile</a></li>


                  </ul>
                </li>

              </ul>

              </div>
            </div>
          </div>
        </nav>

      </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Accuile</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Page introuvable</li>
                </ol>
              </nav>
              <div id="error-page" class="row">
                <div class="col-md-6 mx-auto">
                  <div class="box text-center py-5">
                    <p class="text-center"><img src="https://th.bing.com/th/id/OIP.Opo6FLjWJlv3J5HWACHwkwHaHa?pid=ImgDet&rs=1" width="10%" alt="Obaju template"></p>
                    <h3>Nous sommes désolées - cette page n’est plus là</h3>
                    <h4 class="text-muted">Erreur 404 - Page introuvable</h4>
                    <p class="text-center">Pour continuer, veuillez vous inscrire <strong>vous informations </strong> pour <strong>avoir  </strong>un user account</p>
                    <p class="buttons"><a href="{{route('/')}}" class="btn btn-primary"><i class="fa fa-home"></i> Aller à la page d’accueil</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 <!--
    *** FOOTER ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Pages</h4>
            <ul class="list-unstyled">

              <li><a href="{{route('contact')}}">Contact nous</a></li>
            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a></li>
              <li><a href="register.html">Regiter</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Top categories</h4>
            <ul class="list-unstyled">
              <li><a href="#">T-shirts</a></li>
              <li><a href="#">Shirts</a></li>
              <li><a href="#">Hoodies</a></li>
            </ul>

          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Où nous trouver</h4>
            <p><strong>Sale</strong><br>Technologie Appliquée Hay Salam Salé  <strong>Maroc</strong></p><a href="contact.html">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Get the news</h4>
            <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Où nous trouver</h4>
            <p class="social"><a href="https://www.linkedin.com/in/omar-ezzarouali-9962b9224/" class="facebook external"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/in/omar-ezzarouali-9962b9224/" class="twitter external"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/in/omar-ezzarouali-9962b9224/" class="instagram external"><i class="fa fa-instagram"></i></a><a href="https://www.linkedin.com/in/omar-ezzarouali-9962b9224/" class="gplus external"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/in/omar-ezzarouali-9962b9224/" class="email external"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->


    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2023 Omar Ezzarouali</p>
          </div>

        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
