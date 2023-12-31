<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Recipes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tutorial Videos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            List
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Spicy Food</a></li>
            <li><a class="dropdown-item" href="#">Desserts</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Drinks</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="p-5">
    <h1 class="text-center">Create a Recipe</h1>
        <form action="{{route('store')}}" method = "POST" enctype="multipart/form-data">
          @csrf

        <div class="mb-3">
            <label for="" class="form-label">Name of The Food</label>
            <input value="{{old('name')}}" type="text" class="form-control" id="" name="name">
        </div>
                @error('name')
                    <div class="alert alert-danger" role="alert"> {{$message}}</div>
                @enderror

        <div class="mb-3">
            <label for="" class="form-label">Origin</label>
            <input value="{{old('origin')}}" type="text" class="form-control" id="" name="origin">
        </div>

        @error('origin')
        <div class="alert alert-danger" role="alert"> {{$message}}</div>
        @enderror

        <div class="mb-3">
            <label for="" class="form-label">Publication Date</label>
            <input value="{{old('publication_date')}}" type="date" class="form-control" id="" name="publication_date">
        </div>

        @error('publication_date')
        <div class="alert alert-danger" role="alert"> {{$message}}</div>
         @enderror

        <div class="mb-3">
            <label for="" class="form-label">Steps</label>
            <input value="{{old('steps')}}" type="number" class="form-control" id="" name="steps">
        </div>

        @error('steps')
        <div class="alert alert-danger" role="alert"> {{$message}}</div>
    @enderror

    <div class="mb-3">
    <label for="" class="form label">Category</label>
    <select class="form-select" aria-label="Default select example" name="category_name">
       @foreach ($categories as $c)
            <option value="{{$c->id}}">{{$c->category_name}}</option>
       @endforeach
      </select>
    </div>

        <div class="mb-3">
            <label for="" class="form-label">Image</label>
            <input value="{{old('image')}}" type="file" class="form-control" id="" name="image">
        </div>

        @error('image')
        <div class="alert alert-danger" role="alert"> {{$message}}</div>
         @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
