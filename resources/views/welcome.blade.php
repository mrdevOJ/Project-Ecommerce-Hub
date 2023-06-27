<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIP Hub</title>
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
        <span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item"><a href="#" class="nav-link active ">Accuile</a></li>
              <li class="nav-item"><a href="#details" class="nav-link scroll-to">T-shirt</a></li>
              <li class="nav-item"><a href="#details" class="nav-link scroll-to">Hoodies</a></li>
              <li class="nav-item"><a href="#details" class="nav-link scroll-to">Shirts</a></li>

                </ul>
              </li>

            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>

            </div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="number" placeholder="Prix" name="price" class="form-control">
              <select class="form-select form-control" name="category" aria-label="Default select example">
  <option value="">Category</option>
  <option value="Hoodies">Hoodies</option>
  <option value="T-shirt">T-shirt</option>
</select>
              <select class="form-select form-control" name="color" aria-label="Default select example">
  <option value="">Couleur</option>
  <option value="Black">Black</option>
  <option value="White">With</option>
</select>
              <div class="input-group-append">
                <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>

        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="model/Review.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="model/Review1.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="model/Review2.png" alt="" class="img-fluid"></div>
                <div class="item"><img src="model/Review3.png" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-heart"></i></div>
                  <h3><a href="#">NOUS AIMONS NOS CLIENTS</a></h3>
                  <p class="mb-0">Nous sommes connus pour fournir le meilleur service possible</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-tags"></i></div>
                  <h3><a href="#">Meilleurs prix</a></h3>
                  <p class="mb-0">Vous pouvez vérifier que la hauteur des cases s’ajuste lorsqu’un texte plus long comme celui-ci est utilisé dans l’une d’entre elles.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="box clickable d-flex flex-column justify-content-center mb-0 h-100">
                  <div class="icon"><i class="fa fa-thumbs-up"></i></div>
                  <h3><a href="#">Satisfaction garantie à 100%</a></h3>
                  <p class="mb-0">Retours gratuits sur tout pendant 3 mois.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h2 class="mb-0">Meilleurs Produits </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div id="details" class="product-slider owl-carousel owl-theme">
                 @if(count($article)> 0)
    @foreach($article as $article)
              <div class="item">

                    <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                        @if(Auth::user())
                      <div class="front"><a href="{{route('commandes.show',$article->id)}}"><img src="{{$article['src']}}" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="{{route('commandes.show',$article->id)}}"><img src="{{$article['src']}}" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="{{route('commandes.show',$article->id)}}" class="invisible"><img src="{{$article['src']}}" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="{{route('commandes.show',$article->id)}}" >{{$article['category']}}  </a></h3> <h4>{{$article['color']}} </h4>
                    @else
                    <div class="front"><a href="{{route('error')}}"><img src="{{$article['src']}}" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="{{route('error')}}"><img src="{{$article['src']}}" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="{{route('error')}}" class="invisible"><img src="{{$article['src']}}" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="{{route('error')}}" >{{$article['category']}}  </a></h3> <h4>{{$article['color']}} </h4>
                    @endif
                    <p class="price">
                      <del></del>{{$article['price']}}
                    </p>
                  </div>
                  <!-- /.text-->
                  @if($article['price']<=70  )
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  @endif
                  <!-- /.ribbon-->
                  @if($article['price']>=150 || $article['price']>=75 || $article['price']<=70  )

                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  @endif

                  <!-- /.ribbon-->
                  @if($article['price']>=75)

                  <div class="ribbon gift">
                    <div class="theribbon">GIFT</div>
                    <div class="ribbon-background"></div>
                  </div>
                  @endif

                  <!-- /.ribbon-->
                </div>

                <!-- /.product-->

              <!-- /.product-slider-->
            </div> @endforeach
            @endif

            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        <div class="container">
          <div class="col-md-12">
            <div class="box slideshow">
              <h3>Inspirez-vous</h3>
              <p class="lead">Inspirez-vous de nos designers de classe mondiale</p>
              <div id="get-inspired" class="owl-carousel owl-theme">
                <div class="item"><a href="#"><img src="img/getinspired2.jpg" alt="Get inspired" class="img-fluid"></a></div>
                <div class="item"><a href="#"><img src="img/getinspired3.jpg" alt="Get inspired" class="img-fluid"></a></div>

              </div>
            </div>
          </div>
        </div>
        <!-- *** GET INSPIRED END ***-->
           <!-- Brand Start -->
           <div class="brand">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
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

              <li><a href="{{route('contact')}}">Contact us</a></li>

            </ul>
            <hr>
            <h4 class="mb-3">User section</h4>
            <ul class="list-unstyled">
              <li><a href="#" data-toggle="modal" data-target="#">Login</a></li>
              <li><a href="#">Regiter</a></li>
            </ul>
          </div>
          <!-- /.col-lg-3-->
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Top categories</h4>
            <ul class="list-unstyled">
              <li><a href="#details" class="nav-link scroll-to">T-shirts</a></li>
              <li><a href="#details" class="nav-link scroll-to">Shirts</a></li>
              <li><a href="#details" class="nav-link scroll-to">Hoodies</a></li>
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
            <h4 class="mb-3"> news</h4>
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
    <script src="js/main.js"></script>

  </body>
</html>
