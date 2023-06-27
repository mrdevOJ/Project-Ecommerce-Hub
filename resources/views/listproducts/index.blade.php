

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<title>Lists Products</title>
</head>
<body>

<nav  class="navbar navbar-expand-lg  bg-dark " data-bs-theme="dark">
  <div  class="container-fluid ">
    <a   class="navbar-brand" href="{{route('articles.index')}}">Home Page</a>
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





 <div class="card ">
  <div class="card-body">
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" name="search"  placeholder="Search Id Command" aria-label="Search">
      <input class="form-control me-2" type="date" name="date"  placeholder="trouver par date">
      <input class="form-control me-2" type="text" name="email"  placeholder="trouver par email">
      <select class="form-select" name="select" aria-label="Default select example">
  <option selected value="null">Choisir la category</option>
  <option value="hoodies">hoodies</option>
  <option value="t-shirt">t-shirt</option>
</select>
      <button class="btn btn-outline-success" type="submit">Search</button>

  </div>
</form>
</nav>

  <div class="table-responsive">

<table class="table align-middle">
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
      <th scope="col">Delete</th>
      <th scope="col">Afficher</th>


    </tr>
  </thead>
    @if (count($commands) > 0 )
  @foreach ($commands as $command)


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
     <td>
        <form action="{{route('listproducts.destroy',$command->id)}}" method="post">
            @csrf
                    <input class="btn btn-danger" type="submit" value="Supprimer">            @method('DELETE')

        </form>
</td>

<td>
     <a class="btn btn-warning active" aria-current="page" href="{{route('livraisons.show',[$command->id])}}">Afficher</a>
</td>
    </tr>
   @endforeach
   @endif
  </tbody>

</table>
  </div>

</div>
</div>


</body>
</html>


