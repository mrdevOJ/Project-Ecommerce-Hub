
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link href="bootstrap.min.css" rel="stylesheet">
<link href="css/style.css">
<title>Hub Edite</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">      <title>Hoodie Hub</title>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script></head>
<style>


body{
background-color: #ffffff;
background-image:  repeating-radial-gradient( circle at 0 0, transparent 0, #ebebeb 10px ), repeating-linear-gradient( #bfbfbf55, #bfbfbf );}
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('articles.index')}}">Home Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('listproducts.index')}}">List Commands</a>
        </li>



      </ul> <div>
      <img src="../model/ofppt/ofppt.png" class="rounded float-end w-25 "  >
</div>

    </div>
  </div>
</nav>
<div class="container ">




<div class="card m-2 " style="width: 100%;">
  <div class="card-body">

<form action ="{{route('articles.update',[$article->id])}}" method ="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  @csrf
  @method ('PUT')
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <div class="form-error">
           @error('article-category')
        {{$message}}
        @enderror
        </div>
        <select class="form-select" name="article-category" aria-label="Default select example">
  <option selected value="null">Choisir la Category</option>
  <option value="T-shirt">T-shirt</option>
  <option value="Hoodies">Hoodies</option>
</select>
        <label class="form-label" for="form6Example1">Category</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
         <div class="form-error">
           @error('article-color');
        {{$message}}
        @enderror
        </div>
        <select class="form-select" name="article-color" aria-label="Default select example">
  <option selected value="null">Choisir la Couleur</option>
  <option value="White">White</option>
  <option value="Black">Black</option>
</select>
        <label class="form-label" for="form6Example2">Color</label>
      </div>
    </div>
  </div>
  <!-- Text input -->
  <div class="form-outline mb-4">
     <div class="form-error">
           @error('article-src');
        {{$message}}
        @enderror
        </div>
    <input type="text" id="form6Example3" name="article-src" value="{{$article->src}}"  class="form-control" />
    <label class="form-label" for="form6Example3">src</label>
  </div>

  <!-- Number input -->
  <div class="form-outline mb-4">
     <div class="form-error">
           @error('article-price');
        {{$message}}
        @enderror
        </div>
    <input type="number" id="form6Example6" name="article-price" value="{{$article->price}}"  class="form-control" />
    <label class="form-label" for="form6Example6">price</label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block w-100">Add Product</button>
</form>

</div>

</div>

</div>
</body>
