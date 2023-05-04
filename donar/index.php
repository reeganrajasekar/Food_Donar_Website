
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>fooddonate </title>

	<!-- Animate.css -->
	<link rel="stylesheet" href="/static/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="/static/css/icomoon.css">
	<link rel="stylesheet" href="/static/vendor/bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap  -->
	<!-- Superfish -->
	<link rel="stylesheet" href="/static/css/superfish.css">

	<link rel="stylesheet" href="/static/css/style.css">
	<!-- Modernizr JS -->
	<script src="/static/js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Food Donate</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="/">Home</a>
							</li>
							<li><a href="/about.php">About</a></li>
							<li class="active"><a href="/donar">Donar</a></li>
							<li><a href="/user">User</a></li>
							<li><a href="/admin">Admin</a></li>
						</ul>
						
					</nav>
					
				</div>
			</div>
		</header>
		
        <div class="container">
            <div class="row my-4">
                <div class="col-4"></div>
                <div class="col-4 pt-5 pb-2 rounded" style="background-color:#f7f7f7;">
                    <form action="/donar/signin.php" class="container" method="post">
                        <h4 style="color:#ff5722;text-align:center;font-weight:800">Donar Login</h4>
                        <div class="mb-3">
                            <label class="form-label">Email :</label>
                            <input type="email" name="email" placeholder="Enter email" class="form-control" required>
                        </div>
                        <div class="mb-5">
                            <label class="form-label">Password :</label>
                            <input type="password" name="password" placeholder="Enter Password" class="form-control" required>
                        </div>
                        <div class="mb-3 text-center">
                            <button class="btn" style="background:#ff5722;font-size:20px;color:white">Login</button>
                        </div>
                    </form>
                    <p class="text-center">Don't you have an Account? <a href="/donar/register.php" style="color:#ff5722;">Click here</a></p>
                </div>
            </div>
        </div>
		


		<!-- fh5co-blog-section -->
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
		<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
      document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 3000)
</script>

<script>
    if(urlParams.get('msg')){
      document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 3000)
</script>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="/static/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="/static/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="/static/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="/static/js/jquery.waypoints.min.js"></script>
	<script src="/static/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="/static/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="/static/js/hoverIntent.js"></script>
	<script src="/static/js/superfish.js"></script>
	
	<!-- Main JS -->
	<script src="/static/js/main.js"></script>

	</body>
</html>

