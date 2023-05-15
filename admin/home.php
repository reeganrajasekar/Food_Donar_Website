<?php require("./layout/db.php")?>
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
					<h1 id="fh5co-logo"><a href="">Admin</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="/admin/home.php">Dashboard</a>
							</li>

                            <li>
								<a href="/admin/food.php">Donations</a>
							</li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#f7f7f7;padding:7px">
                                    <li>Admin</li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/admin?msg=Logged Out!">Logout</a></li>
                                </ul>
                            </li>
						</ul>
						
					</nav>
					
				</div>
			</div>
		</header>


		
        <div class="container py-4">
            <div class="row ">
                <div class="col-4 mb-3">
                    <div class="bg-primary rounded p-4">
                        <h5 class="card-title mb-2 text-white">
                            Total Food Donations
                            <br><br>
                            <?php
                                $result = $conn->query("SELECT id FROM food");
                                echo($result->num_rows)
                            ?>
                        </h5>          
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="bg-success rounded p-4">
                        <h5 class="card-title mb-2 text-white">
                            Total Food Approvals
                            <br><br>
                            <?php
                                $result = $conn->query("SELECT id FROM food WHERE data='Approved'");
                                echo($result->num_rows)
                            ?>
                        </h5>          
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="bg-danger rounded p-4">
                        <h5 class="card-title mb-2 text-white">
                            Total Food Denied
                            <br><br>
                            <?php
                                $result = $conn->query("SELECT id FROM food WHERE data='Denied'");
                                echo($result->num_rows)
                            ?>
                        </h5>          
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="bg-info rounded p-4">
                        <h5 class="card-title mb-2 text-white">
                            Total Donars
                            <br><br>
                            <?php
                                $result = $conn->query("SELECT id FROM donar");
                                echo($result->num_rows)
                            ?>
                        </h5>          
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="bg-warning rounded p-4">
                        <h5 class="card-title mb-2 text-white">
                            Total Users
                            <br><br>
                            <?php
                                $result = $conn->query("SELECT id FROM user");
                                echo($result->num_rows)
                            ?>
                        </h5>          
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="bg-info rounded p-4">
                        <h5 class="card-title mb-2 text-white">
                            Total Amount Donations
                            <br><br>
                            <?php
                                $result = $conn->query("SELECT id FROM amount");
                                echo($result->num_rows)
                            ?>
                        </h5>          
                    </div>
                </div>
            </div>
        </div>
		
	
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
	<script src="/static/vendor/bootstrap/js/bootstrap.bundle.js"></script>
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

