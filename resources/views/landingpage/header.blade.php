<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.html">Maxim</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('landing') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('landing','#about') }}">About</a></li>
          <li><a class="nav-link scrollto " href="{{ route('landing', '#portfolio') }}">Product</a></li>
          <li><a class="nav-link scrollto" href="{{ route('landing', '#contact') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>