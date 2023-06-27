

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<title> Livraisons</title>
</head>
<body>
<nav  class="navbar navbar-expand-lg  bg-dark " data-bs-theme="dark">
  <div  class="container-fluid ">
  @if(auth()->user()->email=="adminadmin@ofppt.com")
    <a class="navbar-brand" href="{{route('articles.index')}}">Home</a>
    @else
    <a class="navbar-brand" href="{{route('home')}}">Home</a>
    @endif    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ">

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


<div class="container text-center">
  <div class="row">



 <div class="card w-100">
  <div class="card-body w-100">

  <nav class="navbar bg-body-tertiary ">
  <div class="container-fluid display-center">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" name="search"  placeholder="Search Id Command" aria-label="Search">
      <input class="form-control me-2" type="search" name="searchLivreur"  placeholder="Search Id Livreur" aria-label="Search">
      <input class="form-control me-2" type="date" name="date"  placeholder="trouver par date">

      <button class="btn btn-outline-success" type="submit">Search</button>

  </div>

</nav>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id Livrainson</th>
      <th scope="col">id Command</th>
      <th scope="col">Livreur ID</th>
      <th scope="col">Date de Livraisinon</th>
      <th scope="col">Afficher livraison</th>



    </tr>
  </thead>

  <tbody>
    <tr>
        @foreach($livraisons as $livraison)

      <th scope="row">{{$livraison['id']}}</th>
      <td class="text-danger"><strong>{{$livraison['listproduct_id']}}</strong></td>
      <td class="text-success"><strong>{{$livraison['livreur_id']}}</strong></td>
      <td>{{$livraison['date_livrainson']}}</td>
      <td><a href="{{route('livreurs.show',[$livraison->id])}}" class="btn btn-warning">Afficher</a></td>

     <td>

</td>
    </tr>
    @endforeach
  </tbody>
</form>

</table>




</div>
</div>
</div>
</div>

</body>
</html>


