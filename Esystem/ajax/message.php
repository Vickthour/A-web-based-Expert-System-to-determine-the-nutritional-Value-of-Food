
 <?php
 include('conn.php');
session_start();
if(isset($_GET['msg'])){
    include('../conn.php');
    $msg = $_GET['msg'];
    $user = $_SESSION['name'];
    $rece = $_GET['rece'];
    if($msg==""){
        echo "<script>alert('Enter your Message...');</script>";	
    }
    else{
        $query="INSERT INTO msg(user,user2,msg) values('$user','$rece','$msg')";
        $run=$con->query($query);
        echo "<script>alert('Message sent');</script>";	
        
    }

}	
?>
			
			
