<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>TruckFlow</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2e0e6f91c.js" crossorigin="anonymous"></script>

  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }

    /* ✅ NEW PROFESSIONAL NAVBAR COLOR */
    .fedex-purple {
      background-color: #0f172a; /* dark navy */
      color: white;
      box-shadow: 0 2px 10px rgba(0,0,0,0.15);
    }

    .navbar .nav-link {
      color: #e5e7eb !important;
      font-weight: 500;
      transition: 0.3s;
    }

    .navbar .nav-link:hover {
      color: #ff6600 !important;
    }

    .navbar .dropdown-menu {
      border-radius: 10px;
    }

    .navbar .dropdown-item:hover {
      background-color: #f3f4f6;
    }

    .btn-orange {
      background-color: #ff6600;
      color: white;
      border: none;
    }

    .btn-orange:hover {
      background-color: #e65c00;
    }

    .footer-links a {
      text-decoration: none;
      color: #0f172a;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .footer-icons i {
      font-size: 1.2rem;
      color: #0f172a;
      margin: 0 8px;
    }

    .background {
      background-image: url('{{asset('testing/images/images.jpeg')}}');
      background-size: cover;
      background-position: center;
      height: 50vh;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
    }

    .tracking-form input {
      max-width: 300px;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    .accordion-button {
  background: #fff;
  color: #333;
  box-shadow: none;
}

.accordion-button:not(.collapsed) {
  background: #ff6600;
  color: #fff;
}

.accordion-item {
  border-radius: 10px;
  overflow: hidden;
}

.accordion-button:focus {
  box-shadow: none;
}
    
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fedex-purple fixed-top shadow-sm">
  <div class="container-fluid px-3 px-lg-4">

    <!-- Logo -->
    <img src="{{asset('trackflow/IMG-20250707-WA0262.jpg')}}" width="60" height="60" style="border-radius:50px">

    <!-- Toggler -->
   <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
  <span class="navbar-toggler-icon"></span>
</button>

    <!-- Menu -->
    <div class="collapse navbar-collapse mt-3 mt-lg-0" id="navMenu">

      <!-- LEFT LINKS -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-lg-2">

       
          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/FAQ">FAQ</a></li>
          </ul>
       

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown">
            Tracking
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/404">Track Package</a></li>
            <li><a class="dropdown-item" href="/404">Advanced Tracking</a></li>
          </ul>
        </li>

        @auth
        <li class="nav-item">
          <a class="nav-link text-white" href="/admin">Admin Dashboard</a>
        </li>
        @endauth

        <li class="nav-item">
          <a class="nav-link text-white" href="/">Track</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="/FAQ">FAQ</a>
        </li>

      </ul>

      <!-- RIGHT AUTH SECTION -->
      <div class="d-flex flex-column flex-lg-row gap-2 mt-3 mt-lg-0">

        @guest
        
        <a class="nav-link text-white" href="login">Log In</a>
        @endguest

        @auth
        <form action="{{route('logout')}}" method="POST">
          @csrf
          <button type="submit" class="nav-link text-white border-0 bg-transparent p-0">
            Logout
          </button>
        </form>
        @endauth

      </div>

    </div>
  </div>
</nav>

<!-- PAGE CONTENT -->
<div style="margin-top:80px;">
  {{ $slot }}
</div>

<!-- FOOTER -->
<footer class="bg-light pt-5 pb-3 mt-5 border-top">
  <div class="container">

    <div class="row mb-4 gy-4">

      <div class="col-md-3 col-6">
        <h6 class="fw-bold">OUR COMPANY</h6>
        <div class="footer-links d-flex flex-column">
          <a href="#">About TruckFlow</a>
          <a href="#">Careers</a>
          <a href="#">Investor Relations</a>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <h6 class="fw-bold">MORE</h6>
        <div class="footer-links d-flex flex-column">
          <a href="#">Developer Portal</a>
          <a href="#">ShopRunner</a>
        </div>
      </div>

      <div class="col-md-3 col-6">
        <h6 class="fw-bold">LANGUAGE</h6>
        <select class="form-select">
          <option>English</option>
          <option>Français</option>
        </select>
      </div>

      <div class="col-md-3 col-6">
        <h6 class="fw-bold">FOLLOW US</h6>
        <div class="footer-icons mt-2">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-linkedin"></i>
        </div>
      </div>

    </div>

    <div class="text-center small text-muted border-top pt-3">
      &copy; TruckFlow 2025
    </div>

  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>