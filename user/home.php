<?php require("../admin/layout/db.php")?>
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
					<h1 id="fh5co-logo"><a href="">User</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="/user/home.php">Home</a>
							</li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profile
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#f7f7f7;padding:7px">
                                    <li>User : <?php echo($_COOKIE["uname"])?></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="/user?msg=Logged Out!">Logout</a></li>
                                </ul>
                            </li>
						</ul>
						
					</nav>
					
				</div>
			</div>
		</header>

        <p class="text-secondary container alert alert-primary my-2">For amount donations contact us!</p>
		
        <div class="container py-4">
            <h5 style="color:#ff5722;font-weight:800">Available Food Donation :</h5>
            <div class="accordion" id="accordionExample">
            <?php
                $did=$_COOKIE["id"];
                $result = $conn->query("SELECT food.date,food.id,food.type,food.quan,food.data,food.did,donar.name,donar.mobile FROM food INNER JOIN donar ON food.did=donar.id WHERE data='Approved' AND food.uid='no' ORDER BY food.id DESC");
                if($result->num_rows > 0){
                    $i=0;
                    while($row = $result->fetch_assoc()){
                        $i++;
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo($row['id'])?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo($row['id'])?>" aria-expanded="true" aria-controls="collapse<?php echo($row['id'])?>">
                                    Type :<?php echo($row['type'])?>
                                </button>
                                </h2>
                                <div id="collapse<?php echo($row['id'])?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo($row['id'])?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="card-title mb-2">Food Type : <span style="color:#ff5722"><?php echo($row["type"]) ?></span></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Quantity : <span style="color:#ff5722"><?php echo($row["quan"]) ?></span></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Date : <span style="color:#ff5722"><?php echo($row["date"]) ?></span></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Donar Name : <?php echo($row["name"]) ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Donar Mobile : <?php echo($row["mobile"]) ?></h6>
                                    <div style="display:flex;justify-content:right">
                                        <form action="/user/add.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo($row['id'])?>">
                                            <button class="btn btn-success" style="background-color:green">Request</button>
                                        </form>
                                    </div>
                                </div>
                                </div>
                            </div>
                        <?php
                    }
                }else{
            ?>
            </div>
            <p class="text-center text-secondary">Nothing Found</p>
            <?php
                }
            ?>
        </div>

        <div class="container py-4">
            <h5 style="color:#ff5722;font-weight:800">Your Requested Donations :</h5>
            <div class="accordion" id="accordionExample">
            <?php
                $uid=$_COOKIE["uid"];
                $result = $conn->query("SELECT food.date,food.id,food.type,food.quan,food.data,food.did,donar.name,donar.mobile FROM food INNER JOIN donar ON food.did=donar.id WHERE food.uid='$uid' ORDER BY food.id DESC");
                if($result->num_rows > 0){
                    $i=0;
                    while($row = $result->fetch_assoc()){
                        $i++;
                        ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo($row['id'])?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo($row['id'])?>" aria-expanded="true" aria-controls="collapse<?php echo($row['id'])?>">
                                    Type :<?php echo($row['type'])?>
                                </button>
                                </h2>
                                <div id="collapse<?php echo($row['id'])?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo($row['id'])?>" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <h5 class="card-title mb-2">Food Type : <span style="color:#ff5722"><?php echo($row["type"]) ?></span></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Quantity : <span style="color:#ff5722"><?php echo($row["quan"]) ?></span></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Date : <span style="color:#ff5722"><?php echo($row["date"]) ?></span></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Donar Name : <?php echo($row["name"]) ?></h6>
                                    <h6 class="card-subtitle mb-2 text-muted">Donar Mobile : <?php echo($row["mobile"]) ?></h6>
                                    
                                </div>
                                </div>
                            </div>
                        <?php
                    }
                }else{
            ?>
            </div>
            <p class="text-center text-secondary">Nothing Found</p>
            <?php
                }
            ?>
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

