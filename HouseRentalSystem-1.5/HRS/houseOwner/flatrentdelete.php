<?php
include"../connection.php";
session_start();
$adminid=$_GET['id'];
	$sql=mysqli_query($conn,"DELETE from flatrent WHERE id='$adminid'");
	
	if($sql)
	{
		header('location:flatrentdeleteinfo.php');
	}
	else
	{
		echo mysqli_error($conn);
	}
?>