<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Lazy - Bootstrap UI Kit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="A new design system for developing with less effort.">
    <meta name="author" content="BootstrapBay">

    <link href=."assets/img/favicon.ico" rel="icon" type="image/png">
    
    <link rel="stylesheet" href="../assets/vendor/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/lazy.css">
		<link rel="stylesheet" href="../assets/css/demo.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  </head>
  <body class="register">
<div class="container-fluid">
  <div class="row">
	  <div class="col-12 col-md-4 offset-md-1">
				  <div class="register-form">
					  <div class="mb-5">
						  <h1>Login</h1>
						  <p class="lead">Login untuk masuk dashboard</p>
					  </div>
					  <form method="POST" action="{{ route('login') }}">
					  	@csrf
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
			              <div class="custom-control custom-checkbox my-4">
			                <input type="checkbox" class="custom-control-input" id="customCheck2">
			                <label class="custom-control-label" for="customCheck2">Remember me</label>
			              </div>
						  <button type="submit" class="btn btn-block btn-secondary">Submit</button>
						</form>

						
		  		</div>
	  </div>
	  <div class="col-12 col-md-6 offset-md-1 d-flex">
		  <div class=" flex-grow-1">
		  	<img src="../assets/img/home.png" alt="">
		  </div>
	  </div>
  </div>
</div>

    
<footer class="footer-1 bg-light text-dark">
<div class="container">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
	<div class="social mt-4 mt-md-0">
    <a class="twitter btn btn-outline-secondary btn-icon" href="https://twitter.com/adi__try" target="_blank">
      <i class="fab fa-twitter"></i>
      <span class="sr-only">View My Twitter Profile</span>
    </a>
    <a class="facebook btn btn-outline-secondary btn-icon" href="https://www.facebook.com/aditriono.aditriono.7/" target="_blank">
      <i class="fab fa-facebook"></i>
      <span class="sr-only">View My Facebook Profile
        <span>
    </a>
    <a class="github btn btn-outline-secondary btn-icon" href="https://github.com/aditrio" target="_blank">
      <i class="fab fa-github"></i>
      <span class="sr-only">View My GitHub Profile</span>
    </a>
    <a class="instagram btn btn-outline-secondary btn-icon" href="https://instagram.com/adi__try" target="_blank">
      <i class="fab fa-instagram"></i>
      <span class="sr-only">View My Instagram Profile</span>
    </a>
  </div>
</div>
<div class="copyright text-center">
	<hr />
	<p class="small">&copy; 2019, made by Adi Try</p>
</div>
</div>
</footer>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/popper/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/bootstrap.min.js" ></script>

    <!-- optional plugins -->
    <script src="../assets/vendor/nouislider/js/nouislider.min.js"></script>

    <!--   lazy javascript -->
    <script src="../assets/js/lazy.js"></script>
  </body>
</html>
