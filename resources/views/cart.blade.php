<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blue Spring Water</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">


  <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

  
</head>

<body>
  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Blue Spring Water<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Products</a></li>
          <li><a href="#shop">Shop</a></li>
          <li><a href="#contact">Contact</a></li>
          
          @if(!auth()->user())
          <li><a href="/login">Login</a></li>
          @else
            @if(auth()->user()->role == 1)
          <li><a href="/admin">Admin</a></li>
            @endif
          <li><a href="/logout">Logout</a></li>
          @endif
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">
    <div class="container position-relative">
      <div class="row gy-5" data-aos="fade-in">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2>Welcome {{ auth()->user() ? auth()->user()->full_name : "Guest" }}</h2>
          <p>Sed autem laudantium dolores. Voluptatem itaque ea consequatur eveniet. Eum quas beatae cumque eum quaerat.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#shop" class="btn-get-started">Order Now!</a>
            
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
          <img src="{{ asset('assets/img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
        </div>
      </div>
    </div>


    </div>
  </section>
  <!-- End Hero Section -->

  <main id="main">

    

    


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Cart</h2>
          <p>Manage your cart.</p>
        </div>

        <div class="container">
		
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Product</th>
										<th>Name</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Subtotal</th>
									</tr>
								</thead>
								<tbody>

                  @foreach ($cart as $item)
                  <form action="/cart/edit/{{ $item->id }}" method="POST">
                  @csrf
									<tr>
                    <td><img src="{{ $item->product->image }}" height="50px" alt=""></td>
										<td>{{ $item->product->name }}</td>
										<td>{{ $item->product->price }}</td>
										<td><input type="text" name="quantity" id="quantity" value="{{ $item->quantity }}"></td>
										<td>{{ $item->price }}</td>
										<td>
											<input type="submit" value="Edit" class="btn btn-sm btn-warning">
											<a href="/cart/delete/{{ $item->id }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
                  </form>
                  @endforeach
								</tbody>
							</table>
                <form action="/cart/checkout" method="post">
                  @csrf
                  <button class="btn btn-primary"><a class="fa fa-shopping-cart"></a>  Order Now</button>
                </form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
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

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>