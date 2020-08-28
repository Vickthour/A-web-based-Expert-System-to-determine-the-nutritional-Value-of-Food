<?php
include('conn.php');
session_start();


 $id = $_SESSION['id'];

 $con->query($con,"update user set status='Offline' where idr='$id'");
 echo "<script>alert('Sucessfully Signed Out');</script>";
session_destroy();
header('location: index.php');


?>