<!DOCTYPE html>

<head>
    <title>SOFCORP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">SOFCORP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, <span>{{Auth()->user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/manage/listings">Manage Listings</a></li>
              <li><hr class="dropdown-divider"></li>
              
                <form action="/logout" method="post">
                  @csrf
                  <button class="btn btn-dark ms-3 w-75" type="submit">Logout</button>
                </form>
              
            </ul>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/login">Login</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/register">Register</a></li>
            </ul>
          </li>
          @endauth
        </ul>
        <form class="d-flex" role="search" action="/">
          <input name="search" class="form-control me-2" type="search" placeholder="Search for a company" aria-label="Search">
          <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  {{$slot}}

   <!-- footer -->
  <footer class="text-bg-dark p-3">
    <div class="row">
    <div class="col-md-6">
      <p>
        &copy; Sofcorp. All rights reserved.
    </p>
    </div>
    <div class="col-md-6 text-center">
      <a class="btn btn-outline-light" href="{{route('listings.create')}}">Post a Company</a>
    </div>
  </div>
</footer>
<!-- end footer -->

 <!-- alpine js -->
<script src="//unpkg.com/alpinejs" defer></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html