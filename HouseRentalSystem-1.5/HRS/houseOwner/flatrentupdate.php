<?php
include"../connection.php";
session_start();

$ID=$_SESSION['ID'];

$check="";
if(isset($_POST['submit']))
{
	
	$representativephn=$_POST['representativephn'];
	
	
	//update into flatrent
	$sql=mysqli_query($conn,"UPDATE `flatrent` SET `representativephn`='$representativephn' WHERE id='$ID'");
	
	if($sql){
		header('location:RentList.php');
	}
	
	
}

?>