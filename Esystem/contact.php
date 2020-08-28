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
			<h3 class="jub_title"><i class="fa fa-user">&nbsp;</i> contact us</h3>
		</div>


	<div class="w3ls-banner">
		<div class="container">
			<div class="heading">
				<h2>Please Enter Patients Details</h2>
				<p>Fill the form below and submit your query we will contact you as soon as possible.</p>
			</div>
			<div class="agile-form">
				<form action="/" method="post">
					<ul class="field-list">
						<li>
							<label class="form-label"> 
								Full Name 
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="patient_name" placeholder="Enter Patients Name" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Gender
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
								</select>
							</div>
						<li>
						<li> 
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="mobile_number" placeholder="Mobile Number" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Date of Birth
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">
									<select name="day" class="day">
										<option>&nbsp;</option>
										<?php for ($i=1; $i <= 31; $i++) { 
											echo "<option value=".$i.">".$i."</option>";
										} ?>
									</select>
									<label class="form-sub-label1"> Day </label>
								</span>
								<span class="form-sub-label">
									<select name="month">
										<option>&nbsp;</option>
										<option value="January"> January </option>
										<option value="February"> February </option>
										<option value="March"> March </option>
										<option value="April"> April </option>
										<option value="May"> May </option>
										<option value="June"> June </option>
										<option value="July"> July </option>
										<option value="August"> August </option>
										<option value="September"> September </option>
										<option value="October"> October </option>
										<option value="November"> November </option>
										<option value="December"> December </option>
									 </select>
									<label class="form-sub-label1"> Month </label>
								</span>
								<span class="form-sub-label">
									<input type="text" class="year" name="year" placeholder=" Enter Year" required>
									<label class="form-sub-label1"> Year </label>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="street_address" placeholder=" " required>
									<label class="form-sub-label1"> Street Address </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="street_address2" placeholder=" " required>
									<label class="form-sub-label1"> Street Line 2 </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="city" placeholder=" " required>
									<label class="form-sub-label1"> City </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="state" placeholder=" " required>
									<label class="form-sub-label1"> State / Province </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="zipcode" placeholder=" " required>
									<label class="form-sub-label1"> Postal / Zip Code </label>
								</span>
								<span class="form-sub-label">
									<input type="text" name="country" placeholder=" " required>
									<label class="form-sub-label1"> Country </label>
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="myname@example.com" required>
							
							</div>
						</li>
						<li> 
							<label class="form-label1">
								Mention the details of previous consultings with us.
							</label>
							<div class="form-input2">
								<textarea rows="5" cols="20" name="textarea"></textarea>
							
							</div>
						</li>
						<li class="last-type"> 
							<label class="form-label1">
								Select which types of appointment you require.
								<span class="form-required"> * </span>
							</label>
							<div class="form-input2">
								<input type="checkbox" name="test1" ><label class="type-of-test">Heart Checkup</label>
								<input type="checkbox" name="test2" ><label class="type-of-test">Eye Checkup</label>
								<input type="checkbox" name="test3" ><label class="type-of-test">Hearing Test</label>
								<input type="checkbox" name="test4" ><label class="type-of-test">Blood Test</label>
								<input type="checkbox" name="test5" ><label class="type-of-test">Normal Consulting</label>
								<input type="checkbox" name="test6" ><label class="type-of-test">Skin Care</label>
							</div>
						</li>
					</ul>
					<input type="submit" value="Book Appointment">
				</form>	
			</div>
		</div>
		<div class="copyright">
			<p>© 2017 Appoint My Doctor Form. All rights reserved | Design by <a href="www.w3layouts.com">W3layouts</a></p> 
		</div>
	</div>



<script type="text/javascript" src="asset/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="asset/js/bootstrap-3.1.1.min.js"></script>
</body>
</html>

<?php } ?>