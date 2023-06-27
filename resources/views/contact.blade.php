<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIP Hub | Contact</title>
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
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
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
          <span class="sr-only"> aller à la page d’accueil</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
              <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
              @if(Auth::user())

                <li class="nav-item"><a href="{{route('home')}}" class="nav-link active ">Accuile</a></li>
                @else
                <li class="nav-item"><a href="{{route('/')}}" class="nav-link active ">Accuile</a></li>
@endif


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
                  <li><a href="{{route('contact')}}">Contact nous</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** PAGES MENU ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Pages</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column">
                    <li><a href="{{route('home')}}" class="nav-link">Text page</a></li>
                    <li><a href="{{route('contact')}}" class="nav-link">Contact page</a></li>
                  </ul>
                </div>
              </div>
              <!-- *** PAGES MENU END ***-->
              <div class="banner"><a href="#"><img src="https://th.bing.com/th/id/OIP.17Z49hdASIEoD7ez2FX_QQAAAA?pid=ImgDet&rs=1" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
              <div id="contact" class="box">
                <h1>Contact</h1>
                <p class="lead">Êtes-vous curieux de quelque chose? Avez-vous un problème avec nos produits?</p>
                <p>N’hésitez pas à nous contacter, notre centre de service à la clientèle travaille pour vous 24h / 24 et 7j / 7.</p>
                <hr>
                <div class="row">
                  <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i>Address</h3>
                    <p>Route de Meknès<br>Hay Salam 11000<br> Salé.<br><br><strong>Maroc</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-phone"></i> Call center</h3>
                    <p class="text-muted">Numéro de Téléphone : </p>
                    <p><strong>+212 05 37 81 41 09</strong></p>
                  </div>
                  <!-- /.col-sm-4-->
                  <div class="col-md-4">
                    <h3><i class="fa fa-envelope"></i> Electronic support</h3>
                    <p class="text-muted">N’hésitez pas à nous écrire un e-mail ou à utiliser notre système de billetterie électronique.</p>
                    <ul>
                      <li><strong><a href="mailto:">Zaroili70@gmail.com</a></strong></li>
                    </ul>
                  </div>
                  <!-- /.col-sm-4-->
                </div>
                <!-- /.row-->
                <hr>
                <div id="map"></div>
                <hr>
                <h2>Contact form</h2>
                <form action="{{ route('send.email')}}" method="POST">
                @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="firstname">Firstname</label>
                        @if(Auth::user())
                        <input id="firstname" name="name" value="{{Auth::user()->name}}" type="text" class="form-control">
                        @else
                        <input id="firstname"  name="name" value="" type="text" class="form-control">
                        @endif
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lastname">Lastname</label>
                        @if(Auth::user())

                        <input id="lastname"  value="{{Auth::user()->prenom}}" type="text" class="form-control">
                        @else
                        <input id="firstname" value="" type="text" class="form-control">
                        @endif

                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email</label>
                        @if(Auth::user())

                        <input id="email" type="email" name="email" value="{{Auth::user()->email}}" class="form-control">
                        @else
                        <input id="email" value="{{old('email')}}" name="email" type="email" class="form-control">
                        @endif
                        @error('email')
                    <div class="form-error text-danger">
                                        <strong>{{$message}}</strong>
</div>
                                @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input id="subject" name="subject" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message"  name="message" class="form-control"></textarea>
                        @error('message')
                    <div class="form-error text-danger">
                                        <strong>{{$message}}</strong>
</div>
                                @enderror
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Envoyer message</button>
                    </div>
                  </div>
                  <!-- /.row-->
                </form>
              </div>
            </div>
            <!-- /.col-md-9-->

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

              <li><a href="contact.html">Contact nous</a></li>
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
            <p><strong>Sale</strong><br>Technologie Appliquée Hay Salam Salé  <strong>Maroc</strong></p><a href="{{route('contact')}}">Go to contact page</a>
            <hr class="d-block d-md-none">
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">the news</h4>
            <p class="text-muted"></p>
            <form>
              <div class="input-group">
                <input type="text" class="form-control"><span class="input-group-append">
                  <button type="button" class="btn btn-outline-secondary">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form>
            <hr>
            <h4 class="mb-3">Stay in touch</h4>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/map.js"></script>
  </body>
</html>
