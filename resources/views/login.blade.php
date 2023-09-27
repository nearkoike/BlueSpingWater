<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
<link href="{{ asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" media="all" />

<meta charset="ISO-8859-1">
<title>Login</title>
<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
</head>
<body>
<header id="header" class="header d-flex align-items-center">

<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
  <a href="/" class="logo d-flex align-items-center">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1>Blue Spring Water<span>.</span></h1>
  </a>
  <nav id="navbar" class="navbar">
    
  </nav><!-- .navbar -->

  <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
  <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

</div>
</header>
<sql:setDataSource var = "snapshot" driver = "com.mysql.jdbc.Driver"
url = "jdbc:mysql://localhost/TEST"
user = "admin" password = "1234"/>

<section class="vh-100 bg-image"
  style="background-color:#249de4">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-center mb-5">Log in</h2>

              <form action="login" method="POST">
              @csrf
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example3cg">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="password" id="form3Example1cg" class="form-control form-control-lg" />
                  <label class="form-label" for="form3Example1cg">Password</label>
                </div>


                <div class="d-flex justify-content-center">
                  <input type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body"></input>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account yet? <a href="/register"
                    class="fw-bold text-body"><u>Register here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Blue Spring Water</span>
            
          </a>
          <p>25 stages NSF World Standard Water Purification & Filtration with Water Treatment</p>
          <div class="social-links d-flex mt-4">
            
            <a href="https://www.facebook.com/profile.php?id=100064112861808" class="facebook"><i class="bi bi-facebook"></i></a>
            
          </div>
        </div>


        

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            Boundary, 331 First<br>
            3019 Marilao Bulacan<br>
            Philippines <br><br>
            <strong>Phone: </strong>09173075975 . 09228037943<br>
            <strong>Telephone: </strong>044-896-2083<br>
            
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Blue Spring Water</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>
</body>
</html>