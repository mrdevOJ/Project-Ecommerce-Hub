<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link href="bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/footer.css">
            <link rel="stylesheet" href="css/button.css">
            <link rel="stylesheet" href="css/nav.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      <title>Hoodie Hub</title>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </head>

<body>

      <nav  class="navbar navbar-expand-lg bg-dark " data-bs-theme="dark">
  <div  class="container-fluid ">
    <a   class="navbar-brand" href="#">Home Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active"  href="{{route('articles.create')}}">Add Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('listproducts.index')}}">List Commands</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="{{route('livraisons.index')}}">Livraisons </a>
        </li>

@guest
                            @if (Route::has('login'))

                <li class="nav-item float-end m-1"><a href="{{ route('login') }}">Login</a></li>
                            @endif

@if (Route::has('register'))
<li class="nav-item float-end m-1"><a href="{{ route('register') }}" >Register</a></li>

@endif
@else
                            <li class="nav-item float-end m-1">
                                <a id="navbarDropdown" class="nav-link  text-light" href="#" role="button" >
                                    {{ Auth::user()->name }}
                                </a>
                                </li>
                                <li class="nav-item float-end m-1">
                                    <a href="{{ route('logout') }}" class="nav-link  text-warning"
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
</nav>




      <div class="container mt-5">

<div class="container  m-1">

  <div class="row">
    @if(count($article) > 0)
    @foreach($article as $article)
<div class="col w-100 h-100">


<div class="card m-1 " style="width: 18rem;">
  <img src="{{$article['src']}}" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title text-center">{{$article['category']}}</h5>
    <h6 class="card-title text-center">{{$article['color']}}</h6>


 <div class="accordion-body">
        <strong>Price : {{$article['price']}} </strong> DH <br>
      </div>
<!-- <a id="ajt" href="{{route('articles.show',['article'=>$article['id']])}}"> -->
<a id="ajt" href="{{route('articles.edit',$article->id)}}">
<span>Edite  Product</span>
<div class="liquid"></div>
</a>
 <!-- <p><a class="link-opacity-50-hover dark" href="{{route('articles.edit',$article->id)}}">Edite  Product</a></p> -->
 <form action="{{route('articles.destroy',$article->id)}}" method="post">
    @csrf
    @method('DELETE')

</a>
    <button id="bt" type="submit"  value="Delete"><span>delete</span><div class="liquid"></div>

 </button>
</form>
      </div>

  </div>

</div> @endforeach
</div>  @endif
</div>

</div>


</div>

<footer class="footer">
     <div class="container">
      <div class="rowx">
        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul>
            <li><a href="#">hoodies</a></li>
            <li><a href="#">T-shirt</a></li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>

</body>
</html>


