<?php

$dsn= "mysql:host=localhost; dbname=esystem";

try{
	$con = new PDO($dsn,"root","");
}
catch(PDOException $e){
	echo $e->getMessage();
}

?>