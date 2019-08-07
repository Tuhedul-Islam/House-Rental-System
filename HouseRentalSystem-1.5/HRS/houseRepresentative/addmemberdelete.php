<?php
include"../connection.php";
session_start();
$adminid=$_GET['id'];
	$sql=mysqli_query($conn,"DELETE from addmember WHERE id='$adminid'");
	
	if($sql)
	{
		header('location:addmemberdeleteinfo.php');
	}
	else
	{
		echo mysqli_error($conn);
	}
?>