<?php
include"../connection.php";
session_start();

$ID=$_SESSION['ID'];

$check="";
if(isset($_POST['submit']))
{
	
	$membername=$_POST['membername'];
	$occupation=$_POST['occupation'];
	$leavedate=$_POST['leavedate'];
	
	
	//update into addflat
	$sql=mysqli_query($conn,"UPDATE `addmember` SET `membername`='$membername',`occupation`='$occupation',
	`leavedate`='$leavedate' WHERE id='$ID'");
	
	if($sql){
		header('location:memberList.php');
	}
	
	
}

?>