<?php 
	include('connection.php');
	
	$prod_id = $_GET['prod_id'];
	$query = "delete from orderdetails where prod_id='$prod_id'";
	$res = mysql_query($query);
	
	header("location:account.php");
	
	
?>