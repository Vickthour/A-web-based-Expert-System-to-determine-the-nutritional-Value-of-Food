<?php
include('conn.php');
	session_start();
	if(!$_SESSION['id']){
	header('location: index.php');	
	}
	else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Appointment</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="icon" href="asset/img/logo.png">
	<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="asset/css/font-awesome.css" rel="stylesheet">
	<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="asset/css/contact.css">
</head>

<body>
		<div class="container-fluid">
			<div class="header">
				<div class="container-fluid">
					<nav class="navbar navbar-default">
						<!-- mobile display -->

						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							<div class="logo">
								<h1><a class="navbar-brand" href="dash.php"><span>Sam</span>press</a></h1>
							</div>
						</div>

						<!-- links-->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="cl-effect-1" id="cl-effect-1">
								<ul class="nav navbar-nav vast">
									<li><a href="dash.php" class="scroll" data-hover="Home">Home</a></li>
									<li><a href="about.php" class="scroll" data-hover="About">About</a></li>
									<li><a href="services.php" class="scroll" data-hover="Services">Services</a></li>
									<li><a href="contact.php" class="active" data-hover="Contact">Contact</a></li>
									<li>
									<a class="navbar-brand navbar-right" href="logout.php"><strong style="font-size: 0.7em;color: white;"><?php echo $_SESSION['email']; ?><br/><i class="glyphicon glyphicon-log-out"></i> Logout</strong></a>
									</li>
								</ul>
							</nav>
						</div>
						<!-- /navbar-ends -->
					</nav>
				</div>
			</div>	<!-- end header -->
				
	

			<div class="jumbotron">
				<h3 class="jub_title"><i class="fa fa-car">&nbsp;</i> About us</h3>
			</div>

			<div class="body-content">
				
			</div>
		</div> <!-- end main container fluid -->



<script type="text/javascript" src="asset/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

<?php } ?>