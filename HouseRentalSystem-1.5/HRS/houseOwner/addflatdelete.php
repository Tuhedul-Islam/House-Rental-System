<?php
include"../connection.php";
session_start();
$adminid=$_GET['id'];
	$sql=mysqli_query($conn,"DELETE from addflat WHERE id='$adminid'");
	
	if($sql)
	{
		header('location:addflatdeleteinfo.php');
	}
	else
	{
		echo mysqli_error($conn);
	}
?>