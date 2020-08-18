<?php
    session_start();// starting session to enter website
    include('../conn.php');// including connection to database
    if(isset($_GET['id'])){//means if gets email the perform the rest operation
       $id = $_GET['id'];
        $con->query("DELETE FROM msg where id='$id'");
        
    }
?>