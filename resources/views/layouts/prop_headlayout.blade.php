<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="author" content="Innocent Tauzeni">
	   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-icons.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/all.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/tauzeni.css')}}">
</head>
<body>
    <!-- navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container p-2 shadow" style="border-radius: 15px!important; box-shadow: offset-x offset-y blur-radius spread-radius color">
      <a class="navbar-brand"  href="#"><b><strong><h4>iLanding</h4></strong></b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-primary" href="#">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#aboutus">About</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#feature">Features</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#Services">Services</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#Pricing">Pricing</a>
            </li>

            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    Dropdown
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">
                        Dropdown Item 1 2025
                    </a>
                    <a class="dropdown-item" href="#">
                        Dropdown Item 2 2025
                    </a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact</a>
            </li>

        </ul>
        <ul class="navbar-nav ms-auto">
        @guest
        @else
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('home')}}">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>

          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </li>
        @endguest
        <li class="nav-item">
            <a  href="{{ route('login') }}" class="nav-link  btn btn-primary rounded btn-sm shadow  text-white"
                style="border-radius: 15px!important;" href="#">Get Started</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

    @yield('content')


    <footer class="bg-light py-4">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>iLanding</h5>
                    <address>
                        A108 Adam Street<br>
                        Harare, ZW<br>
                    </address>
                    <p><strong>Phone:</strong> +263 774914150</p>
                    <p><strong>Email:</strong> innocent.tauzeni@gmail.com</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-secondary btn-sm rounded-circle"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-decoration-none">About us</a></li>
                        <li><a href="#" class="text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-decoration-none">Terms of service</a></li>
                        <li><a href="#" class="text-decoration-none">Privacy policy</a></li>
                    </ul>
                </div>

                <!-- Our Services -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Web Design</a></li>
                        <li><a href="#" class="text-decoration-none">Web Development</a></li>
                        <li><a href="#" class="text-decoration-none">Product Management</a></li>
                        <li><a href="#" class="text-decoration-none">Marketing</a></li>
                        <li><a href="#" class="text-decoration-none">Graphic Design</a></li>
                    </ul>
                </div>

                <!-- Extra Columns -->
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Hic solutasetp</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-decoration-none">Molestiae accusamus iure</a></li>
                        <li><a href="#" class="text-decoration-none">Excepturi dignissimos</a></li>
                        <li><a href="#" class="text-decoration-none">Suscipit distinctio</a></li>
                        <li><a href="#" class="text-decoration-none">Dilecta</a></li>
                        <li><a href="#" class="text-decoration-none">Sit quas consectetur</a></li>
                    </ul>
                </div>
            </div>

            <div class="text-center mt-4">
                <p class="mb-0">&copy; Copyright <strong>Landing</strong>. All Rights Reserved</p>
                <p>Designed by <a href="#" class="text-decoration-none">Innocent Tauzeni</a></p>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/all.min.js')}}"></script>
</body>
</html>
