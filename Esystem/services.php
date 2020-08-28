<?php
include('conn.php');
  session_start();
  if(!$_SESSION['id']){
  header('location: index.php');  
  }
  else{
         $use = $con->query("SELECT * FROM user");
                   $fetch = $use->fetchAll(PDO::FETCH_ASSOC);
                    foreach($fetch as $data){
                                        $id = $data['id'];
                                        $n = $data['name'];
                                        $u = ucwords($data['email']);
                                      }
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
	<link href="asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="icon" href="asset/img/logo.png">
	<link href="asset/css/font-awesome.css" rel="stylesheet">
	<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="asset/css/options.css" rel="stylesheet" type="text/css"/>
	
</head>


<body onload="content_load()">
	<script type="text/javascript" src="asset/js/jquery-3.5.1.min.js"></script>
    <div class="totally">
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
						<!-- /.navbar-ends -->
					</nav>
			</div>	
				
		</div> <!-- end header -->

			<div class="jumbotron">
				<h3 class="jub_title"><i class="fa fa-user">&nbsp;</i> Services</h3>
			</div>



		<div class="body">
			<div class="services_heady">What wery</div>
			<div class="container-fluid w3-services-grids">
		

				<div class="categories col-md-6">
					<div class="cat_1">
							<div class="col-md-2">
								<i class="fa fa-user"></i>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-9">
								<p style="  color: white; font-weight: 300;">Lorem ipsum dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur</p>
						
								<div class="readmore-w3">
									<div class="readmore-w3"><a class="readmore" href="click.php">Test</a></div>

								</div>
							</div>
							<div class="clearfix"></div>
					</div>

					<div class="cat_1">
							<div class="col-md-2">
								<i class="fa fa-user"></i>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-9">
								<p style="  color: white; font-weight: 300;">Lorem ipsum dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur</p>
								<div class="readmore-w3"><a class="readmore" href="click.php">Test</a></div>
							</div>
							<div class="clearfix"></div>
					</div>

					<div class="cat_1">
							<div class="col-md-2 col-sm-2">
								<i class="fa fa-user"></i>
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-9 col-sm-9">
								<p style="  color: white; font-weight: 300;">Lorem ipsum dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur um dolor sit amet, consectetur</p>
								<div class="readmore-w3"><a class="readmore" href="chat.php?user=<?php echo $u ?>" data-toggle="modal" data-target="#">Test</a></div>
							</div>
							<div class="clearfix"></div>
					</div>
                </div>

                <div class="col-md-3"></div>
                <div class="col-md-3">
                	
                	<div href="" class=" list-group list-group-item-heading" style="font-size: 1.3em; text-align: center; text-transform: uppercase; background-color: #555555; color: #fff; font-weight: 300; margin-top: 30px;"> Heading</div>
                		<a href= "#" class="list-group-item col-md-12"><i class="badge">3</i>Justification</a>
                		<a href= "#" class="list-group-item col-md-12"><i class="badge">3</i>Justification</a>
                		<a href= "#" class="list-group-item col-md-12"><i class="badge">3</i>Justification</a>
                		<a href= "#" class="list-group-item col-md-12"><i class="badge">3</i>Justification</a>
                	</div>
                </div>
                <div class="clearfix"></div>
        </div>
    



	              			
	<!-- Modal -->
	

<script type="text/javascript" src="asset/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


<?php } ?> 
