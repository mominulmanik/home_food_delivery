<?php
	include('db.php');
	$prodid = $_POST['prodid'];
	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$cat=$_POST['cat'];
	mysql_query("UPDATE products SET Product='$pname', Price='$price', Category='$cat' WHERE ID='$prodid'");
	header("location: admin.php");
?>