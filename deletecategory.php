<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('db.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
 $sql = "delete from category where id='$id'";
 if(mysql_query( $sql))
 	echo "OKKKK";
 header("location:admincategory.php");
}

?>