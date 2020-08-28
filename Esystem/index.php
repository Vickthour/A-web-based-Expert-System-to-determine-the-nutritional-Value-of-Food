<?php  include "conn.php";
session_start();
  if (isset($_POST['register'])) {
    $fullname =strip_tags(preg_replace('#[^@.0-9a-zA-Z]#i','',$_POST['fullname']));
    $email = strip_tags($_POST['email']);
    $pass = strip_tags(preg_replace('#[^0-9a-zA-Z]#i','',$_POST['pass']));
    $rpass = strip_tags(preg_replace('#[^0-9a-zA-Z]#i','',$_POST['rpass']));
    $npass = md5($pass);
    $check = $con->query("SELECT * FROM user WHERE email = '$email' ");
    $checker = $check->fetch(PDO::FETCH_ASSOC);
   
   if ($checker){
   		echo "Email has Already Existed!";
   }else if( $pass != $rpass){
   		echo "Password MisMatch!";
   }else{
	    $query = $con->query("INSERT INTO user(name,email,pass) VALUES('{$fullname}','{$email}','{$npass}')");
	    if (!$query) {
	      echo "Not Saved,Try agian";
	    }else{echo "Success";}
	}
}

if (isset($_POST['login'])) {
	$lemail=strip_tags($_POST['lemail']);
	$lpass=strip_tags(preg_replace('#[^0-9a-zA-Z]#i','',$_POST['lpass']));

	$nlpass = md5($lpass);

	 $log = $con->query("SELECT * FROM user WHERE email = '$lemail' AND pass = '$nlpass' ");
     $loger = $log->fetch(PDO::FETCH_ASSOC);

     if ($loger) {
     	 $seconds = 5 + time();
     	 setcookie(loggedin, date("F jS - g:i a"), $seconds);
     	 $_SESSION['id'] = $loger['id'];
     	 $_SESSION['email'] = $loger['email'];
     	 $_SESSION['pass'] = $loger['pass'];
     	 $_SESSION['name'] = $loger['name'];

            header('location: dash.php');
            exit();
     	
     }else{
     	echo "Forbidden, Incorrect Username or Password";
     }

}




?>

<!DOCTYPE html>
<html>
<head>

	<title>Esystem | Login</title>
	<link rel="icon" href="asset/img/logo.png">
	<link href="asset/css/font-awesome.css" rel="stylesheet"> 
	<link href="asset/css/login.css" rel="stylesheet" type="text/css" media="all" />
	<link href="asset/css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<script type="text/javascript" src="asset/js/jquery-3.5.1.min.js"></script>

	<section class="loginWrapper">
  		<div class="logo">
			<h1><a class="navbar-brand" href="index.php" style="color: #fc3c2a;"><span >Sam</span>press</a></h1><br>
		</div>
		<ul class="tabs">
			<li class="active">Login</li>
			<li>Register</li>
		</ul>

	<ul class="tab__content">
    
		<li class="active">
			<div class="content__wrapper">
				<form method="POST" action="">
					<input type="email" name="lemail" placeholder="Email" required>
					<input type="password" name="lpass" placeholder="Password" required>
					<input type="submit" name="login" value="Login">
				</form>
			</div>
		</li>
   
		<li>
			<div class="content__wrapper">
				<form method="POST" action="">
					<input type="name" name="fullname" placeholder="Username" required>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="pass" placeholder="Password" required>
					<input type="password" name="rpass" placeholder="Repeat-Pass" required>
					<input type="submit" value="Register" name="register">
				</form>
			</div>
		</li>
  
	</ul>

    </section>

	<div class="logginFormFooter">
	&copy; 2020 Project <a href="#">Federal Poly Ilaro</a>
	</div>



	<script type="text/javascript">
		$(document).ready(function(){
    
		    // Variables
		    var clickedTab = $(".tabs > .active");
		    var tabWrapper = $(".tab__content");
		    var activeTab = tabWrapper.find(".active");
		    var activeTabHeight = activeTab.outerHeight();
		    
		    // Show tab on page load
		    activeTab.show();
		    
		    // Set height of wrapper on page load
		    tabWrapper.height(activeTabHeight);
		    
		    $(".tabs > li").on("click", function() {
		        
		        // Remove class from active tab
		        $(".tabs > li").removeClass("active");
		        
		        // Add class active to clicked tab
		        $(this).addClass("active");
		        
		        // Update clickedTab variable
		        clickedTab = $(".tabs .active");
		        
		        // fade out active tab
		        activeTab.fadeOut(250, function() {
		            
		            // Remove active class all tabs
		            $(".tab__content > li").removeClass("active");
		            
		            // Get index of clicked tab
		            var clickedTabIndex = clickedTab.index();

		            // Add class active to corresponding tab
		            $(".tab__content > li").eq(clickedTabIndex).addClass("active");
		            
		            // update new active tab
		            activeTab = $(".tab__content > .active");
		            
		            // Update variable
		            activeTabHeight = activeTab.outerHeight();
		            
		            // Animate height of wrapper to new tab height
		            tabWrapper.stop().delay(50).animate({
		                height: activeTabHeight
		            }, 500, function() {
		                
		                // Fade in active tab
		                activeTab.delay(50).fadeIn(250);
		                
		            });
		        });
		    });
		});


	</script>
</body>
</html>