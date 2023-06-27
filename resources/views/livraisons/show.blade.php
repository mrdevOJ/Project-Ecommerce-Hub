

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      <title>Hoodie Hub</title>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>    <title>Lists Products</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('articles.index')}}">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div>
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
        </div>
  </div>
</nav>@error('listproduct_id')
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Alert !</strong>  {{$message}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


        @enderror
<div class="container">
  <div class="row">



 <div class="card w-100">
  <div class="card-body">



<table class="table">
  <thead>
    <tr>
      <th scope="col">id Command</th>
      <th scope="col">Name</th>
      <th scope="col">Prenom</th>
      <th scope="col">email</th>
      <th scope="col">date Command</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">desing Id</th>
      <th scope="col">Card Number</th>
      <th scope="col">Delet</th>


    </tr>
  </thead>


  <tbody>
    <tr>
      <th scope="row">{{$command['id']}}</th>
      <td>{{$command['name']}}</td>
      <td>{{$command['prenom']}}</td>
      <td>{{$command['email']}}</td>
      <td >{{$command['created_at']}}</td>
      <td>{{$command['quantity']}}</td>
      <td>{{$command['category']}}</td>
      <td>{{$command['article_id']}}</td>
      <td>{{$command['cardNumber']}}</td>
     <td><input class="btn btn-dark" type="submit" value="Delet">
</td>
    </tr>
  </tbody>

</table>

<form  action ="{{route('livraisons.store')}}" method ="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  @csrf
  <input type='hidden' name="listproduct_id" value="{{$command['id']}}" >
      <div class="form-outline">
        <div class="form-error text-danger">
           @error('cin')
        {{$message}}
        @enderror
        </div>
        <select class="form-select bg-dark text-light"  data-bs-theme="dark"  name="cin" >
  <option selected value="null">Choisir le CIN du livreur</option>
  @foreach($cin as $cin)
  <option value="{{$cin['id']}}"> nom : <strong class="text-danger">{{$cin['name']}}</strong> prennom : <strong>{{$cin['prenom']}}</strong> CIN: <strong>{{$cin['CIN']}}</strong></option>
  @endforeach
</select>
      </div>
      <div class="form-outline mt-1">
        <div class="form-error text-danger">
           @error('date')
        {{$message}}
        @enderror
        </div>

        <strong class="form-label" for="form6Example1">Choisir la date</strong>
        <input class="form-control me-2 w-25 " type="date" name="date" value="{{old('date')}}" placeholder="trouver par date">

      </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-dark mt-2">Ajouter Une nouvelle Livraison</button>
</form>

</div>
</div>


</div>
</div>

</body>
</html>


