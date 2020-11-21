<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Halaman Home</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/blog-home.css" rel="stylesheet">
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Laravel News</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <form class="form-inline" action="/search">
                        @csrf
                        <font color="white"><label for="keyword">Kata kunci : </label></font>&nbsp;
                        <input type="text" class="form-control" name="keyword">&nbsp;
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i> Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
   </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="my-4">Daftar Artikel</h1>
            <!-- Blog Post -->
            @foreach($artikel as $a)
            <div class="card mb-4">
                <img class="card-img-top" src="{{ $a->urlToImage}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title">{{ $a->title}}</h2>
                    <p class="card-text">{{ $a->description}}</p>
                    <a href="#" class="btn btn-primary">Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">{{ $a->url}}</div>
            </div>
            @endforeach
        </div>
    </div>
  </div>
</body>
</html>