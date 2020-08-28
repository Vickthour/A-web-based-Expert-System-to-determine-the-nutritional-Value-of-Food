<?php
include('conn.php');
	session_start();
	if(!$_SESSION['id']){
	header('location: index.php');	
	}
	else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Esystem</title>
	<link rel="icon" href="asset/img/logo.png">
	<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="asset/css/font-awesome.css" rel="stylesheet">
	<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="asset/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="totally">
		<div class="header">
			
			<div class="container">
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
									<li><a href="#" class="active" data-hover="Home">Home</a></li>
									<li><a href="about.php" class="scroll" data-hover="About">About</a></li>
									<li><a href="services.php" class="scroll" data-hover="Services">Services</a></li>
									<li><a href="contact.php" class="scroll" data-hover="Contact">Contact</a></li>
									<li>
									<a class="navbar-brand navbar-right" href="logout.php"><strong style="font-size: 0.7em;color: white;"><?php echo $_SESSION['email']; ?><br/><i class="glyphicon glyphicon-log-out"></i> Logout</strong></a>
									</li>
								</ul>
								
                          		  
                       			 

							</nav>
						</div>
						<!-- /.navbar-ends -->
					</nav>
			</div>	
				
		</div> <!-- end header -->

		<div class="intro-img">
			<div class="intro-content">
				<h3>Meditation gives<br/> trasformation</h3>
				<p class="slider-info">derit in voluptate velit essecillum dolore eu fugiat nulla.</p>
			    <div class="readmore-w3"><a class="readmore" href="#" data-toggle="modal" data-target="#myModal1">Read More</a></div>
					
			</div>

					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
						<!-- Modal1 -->
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<div class="col-md-4">
										<img src="asset/img/img1.jpg" alt="image" class="img-thumbnail">
										</div>
										<h5>ENVIRONMENT & SUSTAINABILITY{<strong> Dear,  <?php echo $_SESSION['name']; ?>}</h5>

										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
										<div class="readmore-w3"><a href="services.php"><i class="fa fa-plane"> </i> ggggg</a></div>
									</div>
								</div>
							</div>
						</div>



		</div>




		<div class="body">
			<div class="welcome" id="about">
					<div class="container">
						<div class="w3-welcome-grids">

							<div class="col-md-5 col-xl-5 w3l-welcome-left">
								<h2>Welcome <span>to SamPress Life</span></h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt semper porta. Sed id nunc accumsan, accumsan eros placerat, rhoncus dolor. Integer ac mauris quis leo blandit egestas. Nam in libero ligula.</p>
								<div class="w3ls-button">
									<a href="#" class="w3_agileits_sign_up2 popup-with-zoom-anim  ab scroll" >Test Now!</a>
								</div>

				
							</div>

								<div class="col-md-2 col-sm-2"></div>

							<div class="col-md-5 w3l-welcome-right">
								<div class="w3l-welcome-right-grids">
									<div class="col-sm-5 col-sm-5 w3l-welcome-right-img">
										<img src="asset/img/img1.jpg" alt="" />
									</div>
									<div class="col-sm-7 w3l-welcome-right-img1">
										<img src="asset/img/img2.jpg" alt="" />
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>

						</div>
					</div>


				</div>


				<!-- services -->
		<div class="services" id="services">
			<div class="service_head">
				<h3>services</h3>
			</div>
			<!-- container -->
			<div class="w3-services-grids">
				<div class="col-md-6 w3-services-grid-left">
					

				</div>
						
				<div class="col-md-6 w3-services-grid-right">

 <!--Grid one-->	<div class=" w3-services-grid-info">
						<div class="col-md-2 w3-services-grid-left1">
							<i class="fa fa-user" aria-hidden="true"></i>
						</div>
							
						<div class="col-md-10 w3-services-grid-right1">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus commodo.</p>
							<div class="w3ls-button">
								<a href="services.php" class="ab scroll" >Test Now!</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
							
<!--Grid Two-->		<div class=" w3-services-grid-info">
						<div class="col-md-2 w3-services-grid-left1">
							<i class="fa fa-flash" aria-hidden="true"></i>
						</div>

						<div class="col-md-10 w3-services-grid-right1">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus commodo.</p>
							<div class="w3ls-button">
								<a href="services.php" class="ab scroll" >Test Now!</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
							

<!--Grid Three-->	<div class=" w3-services-grid-info">
						<div class="col-md-2 w3-services-grid-left1">
							<i class="fa fa-sitemap" aria-hidden="true"></i>
						</div>
						<div class="col-md-10 w3-services-grid-right1">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus commodo.</p>
							<div class="w3ls-button">
								<a href="services.php" class="ab scroll" >Test Now!</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
	
					<div class="clearfix"></div>
				</div>		
						
			</div>
<!-- //container -->
            </div>
	<!-- //services -->

<!--//body--></div>


		

		<div class="footer">
			<div class=""></div>
		</div>
	</div>



<script type="text/javascript" src="asset/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

<?php } ?>