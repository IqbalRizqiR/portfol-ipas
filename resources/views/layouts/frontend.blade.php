<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Fira+Code:300,regular,500,600,700" rel="stylesheet" />

    <title>SYID Team. | @yield('title')</title>
  </head>
  <body>
    <!-- Navbar -->
    <section class="navbar-section">
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
          <a class="navbar-brand" href="{{ route('home') }}">IqbalR.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}"><span class="ungu">#</span>home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('aboutus*') ? 'active' : '' }}" href="{{ route('aboutus') }}"><span class="ungu">#</span>about-us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('project*') ? 'active' : '' }}" href="{{ route('project') }}"><span class="ungu">#</span>about-us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    <!-- End Navbar -->

    // content
    @yield('content')

    <section class="footer-section">
      <hr class="footer-hr mb-5" />
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-3">
                <h6 class="footer-h6">IqbalR.</h6>
              </div>
              <div class="col-md-4">
                <p class="footer-p">syidteam@syid.id</p>
              </div>
            </div>
          </div>
          <div class="col-md-4"></div>
          <div class="col-md-3">
            <h6>Media</h6>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5 text-bottom">
            <h6 class="footer-bottom-text">Our personal project website :D</h6>
          </div>
        </div>
      </div>
      <div class="container mt-5">
        <p class="copyright text-center">&copy; Copyright 2024. Made by Iqbal Rizqi Ramadhan.</p>
      </div>
    </section>

    <!-- End skills Section -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
