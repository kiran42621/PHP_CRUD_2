<?php
try{
	$con = mysqli_connect("localhost","root","") or die("Unable to connect");
	mysqli_select_db($con,'php_crud');
}
catch(Exception $e){
	echo 'Message: ' .$e->getMessage();
}
?>
