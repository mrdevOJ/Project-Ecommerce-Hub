<html lang="en">
      <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link href="bootstrap.min.css" rel="stylesheet">
           <link rel="stylesheet" href="../css/footer.css">
           <link rel="stylesheet" href="../css/button.css">

           <title>Hoodie Hub panier</title>

           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      <title>Hoodie Hub</title>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></head>
      <body>
 <nav class="navbar navbar-expand-lg bg-body-tertiary navbg"  data-bs-theme="dark">
  <div class="container-fluid">
  <a   class="navbar-brand"  href="{{route('articles.index')}}">Home Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('articles.create')}}">Add Article</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('listproducts.index')}}">List Commands</a>
        </li>


      </ul> <div>
      <img src="../model/ofppt/ofppt.png" class="rounded float-end w-25 "  >
</div>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
<div class="card m-1 w-25 ">
  <div class="container  m-1">

  <div class="card-body">
    <img src="{{ $article['src'] }}" class="card-img-top" >

    <h5 class="card-title text-center">{{ $article['category'] }}</h5>

 <ul class="list-group">
 <li class="list-group-item"> Color : {{ $article['color']}} </li>

  <li class="list-group-item"> Price :<strong> {{ $article['price']}} DH</strong></li>

</ul>
  </div>
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


