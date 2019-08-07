<?php
include"../connection.php";
session_start();

$ID=$_SESSION['ID'];

$check="";
if(isset($_POST['submit']))
{
	
	$rentertype=$_POST['rentertype'];
	$floorno=$_POST['floorno'];
	$rentprice=$_POST['rentprice'];
	$description=$_POST['description'];
	
	
	//update into addflat
	$sql=mysqli_query($conn,"UPDATE `addflat` SET `rentertype`='$rentertype',`floorno`='$floorno',
	`rentprice`='$rentprice',`description`='$description' WHERE id='$ID'");
	
	if($sql){
		header('location:flatList.php');
	}
	
	
}

?>