<?php
include"../connection.php";
session_start();

$ID=$_SESSION['ID'];

$check="";
if(isset($_POST['submit']))
{
	
	$houseName=$_POST['housename'];
	$description=$_POST['description'];
	
	
	//update into addhouse
	$sql=mysqli_query($conn,"UPDATE `addhouse` SET `houseName`='$houseName',`description`='$description' 
	WHERE id='$ID'");
	
	if($sql){
		header('location:houseOwner.php');
	}
	
	
}

?>