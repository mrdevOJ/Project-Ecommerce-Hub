

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


<div class="container w-50 mt-4 ">
  <div class="row ">



 <div class="card mt-1 bg-dark" >
  <div class="card-body  bg-body-tertiary" id="element-to-print">



      <ul class="list-group list-group-flush m-1 "> <h6>Clients informations :</h6>
      <li class="list-group-item"> Nom :{{$command['name']}}</li>
      <li class="list-group-item">Prenom: {{$command['prenom']}}</li>
      <li class="list-group-item">Adresse : {{$command['adresse']}}</li>
      <li class="list-group-item">Quantité : {{$command['quantity']}}</li>
      <li class="list-group-item">Category : {{$command['category']}}</li>
      <li class="list-group-item"> Prix Totale : {{$command['prix']}} <strong>DH</strong></li>

    </ul>
      <ul class="list-group list-group-flush m-1 "> <h6>Livreur informations :</h6>
      <li class="list-group-item">Nom: {{$cin['name']}}</li>
      <li class="list-group-item">Prenom: {{$cin['prenom']}}</li>
      @if(Auth::user()->name==$cin['name'])
      <li class="list-group-item"><strong>CIN : {{$cin['CIN']}}</strong></li>
@endif
    </ul>

    <div class="container text-center mb-3">
  <div class="row border">
    <div class="col border">
      Client Signature
      <div class="card ">
  <div class="card-body mb-5">
  </div>
</div>
    </div>
    <div class="col border">
    Livreur Signature
    <div class="card" >
  <div class="card-body mb-5 " >
  </div>
</div>
    </div>

  </div>
</div>
</div>
@if(Auth::user()->name==$cin['name'])
<button class="btn btn-warning " onclick="generatePDF()" > Download</button>
@endif
</div>
</div>


</body>
<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script src="html2pdf.bundle.min.js"></script>

<script >
    function generatePDF(){
        var element = document.getElementById('element-to-print');
html2pdf(element);
var worker = html2pdf();  // Or:  var worker = new html2pdf.Worker;
var worker = html2pdf().from(element).save();

    }
</script>

</html>


