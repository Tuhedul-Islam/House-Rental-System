<?php
include"../connection.php";
session_start();
$adminid=$_GET['id'];
	$sql=mysqli_query($conn,"DELETE from addhouse WHERE id='$adminid'");
	
	if($sql)
	{
		header('location:addhousedeleteinfo.php');
	}
	else
	{
		echo mysqli_error($conn);
	}
?>