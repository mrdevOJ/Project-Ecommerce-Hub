<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VIP Hub | Commandes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="../vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.blue.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
        <!-- box icon --> <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

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
          <span class="sr-only">Obaju - go to homepage</span></a>
            <div class="navbar-buttons">
              <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
              <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="navigation" class="collapse navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="{{route('home')}}" class="nav-link active ">Home</a></li>
                <li class="nav-item"><a href="#random" class="nav-link ">T-shirt</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">Hoodies</a></li>
                <li class="nav-item"><a href="#" class="nav-link ">Shirts</a></li>

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
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">{{$articles['category']}}</a></li>
                  <li aria-current="page" class="breadcrumb-item active">{{$articles['color']}}</li>
                </ol>
              </nav>
            </div>

            <div class="col-lg-3 order-2 order-lg-1">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categories</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="{{route('home')}}" class="nav-link">All <span class="badge badge-secondary">42</span></a>
                      <ul class="list-unstyled">
                        <li><a href="{{route('home')}}" class="nav-link">T-shirts</a></li>
                        <li><a href="{{route('home')}}"class="nav-link">Shirts</a></li>
                        <li><a href="{{route('home')}}" class="nav-link">Pants</a></li>
                        <li><a href="{{route('home')}}" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>


                  </ul>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Brands <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Armani  (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Versace  (12)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Carlo Bruni  (15)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Jack Honey  (14)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Colours <a href="#" class="btn btn-sm btn-danger pull-right"><i class="fa fa-times-circle"></i> Clear</a></h3>
                </div>
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour white"></span> White (14)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour blue"></span> Blue (10)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour green"></span>  Green (20)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour yellow"></span>  Yellow (13)
                        </label>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"><span class="colour red"></span>  Red (10)
                        </label>
                      </div>
                    </div>
                    <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>
                  </form>
                </div>
              </div>
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="https://th.bing.com/th/id/OIP.17Z49hdASIEoD7ez2FX_QQAAAA?pid=ImgDet&rs=1" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                    <div class="item"> <img src="{{$articles['src']}}" alt="" class="img-fluid"></div>
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center">  {{$articles['color']}} {{$articles['category']}}</h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to">Scroll pour choisir la quantité &amp; les donnés nécessaire</a></p>
                    <p class="price">{{$articles['price']}} <strong>DH</strong> </p>
                    <p class="text-center buttons"><a href="#details" class="btn scroll-to btn-primary"><i class="fa fa-shopping-cart  " ></i> Add to cart</a></p>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="{{$articles['src']}}" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="{{$articles['src']}}" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="{{$articles['src']}}" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4>Product details</h4>
                <p>{{$articles['color']}} {{$articles['category']}}</p>
                <h4>  pour une seule pièce  {{$articles['price']  }} DH</h4>
              <!-- &amp;
               -->
                     <p class="text-muted">      Il faut register toute le formulaire           </p>
                <div class="box">
                <h1>Vous information </h1>
                <p class="lead">Pour la commande</p>

                <hr>
                <form id="forme"  action="{{route('commandes.store')}}" method="post">
                @csrf
<input type='hidden' name="id-article" value="{{$articles->id}}">
                  <div class="form-group">
                    <label for="name">name</label>
                    <input id="name" name="name"  value="{{ Auth::user()->name }}" required type="text" class="form-control">
                    @error('name')
                    <div class="form-error text-danger">
                                        <strong>{{$message}}</strong>
</div>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">prenom</label>
                    <input id="name"  name="prenom"  value="{{Auth::user()->prenom}}" required type="text" class="form-control">
                    @error('prenom')
                    <div class="form-error text-danger">
                                        <strong>{{$message}}</strong>
</div>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email"     name="email" value="{{Auth::user()->email}}" type="text" class="form-control">

                    @error('email')
                    <div class="form-error text-danger">
                                        <strong>{{ $message }}</strong>
</div>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label for="adresse">Adress</label>
                    <input id="email"     name="adresse" value="{{old('adresse')}}"  type="text" class="form-control">

                    @error('adresse')
                    <div class="form-error text-danger">
                                        <strong>{{ $message }}</strong>
</div>
                                @enderror
                  </div>
                  <div class="form-group">
                    <label >Quantité</label>
                    <input    required  name="quantity" value="{{old('quantity')}}" type="number" class="form-control">

                    @error('quantity')
                    <div class="form-error text-danger">
                    <strong>{{ $message }}</strong>
</div>
                                @enderror
                  </div>


                  <div class="row g-0 ">
  <div class="col-sm-6 col-md-8"><div class="form-group w-75">
                    <label >Card Number</label>

                    <input      name="cardNumber" value="{{old('cardNumber')}}" type="number" class="form-control">


                    @error('cardNumber')
                    <div class="form-error text-danger">
                                        <strong>{{ $message }}</strong>
</div>
                                @enderror
                  </div>

</div>


  <div class="col-6 col-md-4"><div class="form-group w-50">
                    <label >Code Number </label>
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
</svg>
                    <input name="code" value="{{old('code')}}" type="number" class="form-control">


                    @error('code')
                    <div class="form-error text-danger">
                                        <strong>{{ $message }}</strong>
</div>
                                @enderror
                  </div></div>




</div>
<div class="form-group w-25">
<label >Date expr</label>

<input name="dateExp" value="{{old('dateExp')}}" type="month" class="form-control">


                    @error('dateExp')
<div class="form-error text-danger">
<strong>{{ $message }}</strong>
</div>
                                @enderror
</div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                  </div>
                </form>


              </div>
                <hr>

                  <div class="share post-container">
    <span class="share-title"><h4>Montrez-le à vos amis</h4></span>
     <div class="social">
        <a href="#" class="telegram"><i class='bx bxl-telegram'></i></a>
        <a href="#" class="twitter"><i class='bx bxl-twitter'></i></a>
        <a href="#" class="whatsapp"><i class='bx bxl-whatsapp'></i></a>
    </div>
                  </div>
              </div>
              <div class="row same-height-row">
                <div class="col-md-3 col-sm-8">
                  <div class="box same-height ">
                    <h3>Vous aimerez peut-être aussi ces produits</h3>
                  </div>
                </div>@foreach($produits1 as $produit)
                <div class="col-md-3 col-sm-6">

                  <div class="product same-height">
                    <div class="flip-container">
                      <div class="flipper">
                        <div class="front"><a href="{{route('home')}}"><img src="{{$produit['src']}}" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="{{route('home')}}"><img src="{{$produit['src']}}" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="" class="invisible"><img src="{{$produit['src']}}" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>{{$produit['category']}}</h3>
                      <p class="price">{{$produit['price']}}</p>

                    </div>
                  </div>
                  <!-- /.product-->


                </div> @endforeach
              </div>
              <div class="row same-height-row">
                <div class="col-md-3 col-sm-8">
                  <div class="box same-height">
                    <h3>Produits consultés récemment</h3>
                  </div>
                </div>@foreach($produits2 as $produit)
                <div class="col-md-3 col-sm-6">

                  <div class="product same-height ">
                    <div class="flip-container ">
                      <div class="flipper ">
                        <div class="front"><a href="{{route('home')}}"><img src="{{$produit['src']}}" alt="" class="img-fluid"></a></div>
                        <div class="back"><a href="{{route('home')}}"><img src="{{$produit['src']}}" alt="" class="img-fluid"></a></div>
                      </div>
                    </div><a href="{{route('home')}}" class="invisible"><img src="{{$produit['src']}}" alt="" class="img-fluid"></a>
                    <div class="text">
                      <h3>{{$produit['category']}}</h3>
                      <p class="price">{{$produit['price']}}</p>

                    </div>
                  </div>
                  <!-- /.product-->


                </div>
                @endforeach

                  <!-- /.product-->
                </div>
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

              <li><a href="contact.html">Contact us</a></li>
              @if(Auth::user()->email =="adminadmin@ofppt.com")
              <li><a href="{{route('articles.index')}}">Admin page</a></li>
              @endif
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
            <h4 class="mb-3">Where to find us</h4>
            <p><strong>Sale</strong><br>Technologie Appliquée Hay Salam Salé  <strong>Maroc</strong></p><a href="contact.html">Go to contact page</a>
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
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>

<script>
const telegram = document.querySelector('.telegram');
const twitter = document.querySelector('.twitter');
const whatsapp = document.querySelector('.whatsapp');
const hrl= location.href;
const message= 'This website Blog have great articles on features technologies';
const telegramAPI = "https://t.me/share/url?url={https://c0rebrains.github.io/Blogs/}&text={This website Blog have great articles on features technologies}";
const twitterAPI =   'https://twitter.com/intent/tweet?text=This website Blog have great articles on features technologies https://c0rebrains.github.io/Blogs/' ;
const whatsappAPI = 'whatsapp://send?text=This website Blog have great articles on features technologies https://c0rebrains.github.io/Blogs/';

telegram.addEventListener('click',()=>{
    window.open(url=telegramAPI,target='blank')
});

twitter.addEventListener('click',()=>{
    window.open(url=twitterAPI,target='blank')

});

whatsapp.addEventListener('click',()=>{
    window.open(url=whatsappAPI,target='blank')

});
</script>


<script src="../js/front.js"></script>
<script src="../js/main.js"></script>

  </body>
</html>
