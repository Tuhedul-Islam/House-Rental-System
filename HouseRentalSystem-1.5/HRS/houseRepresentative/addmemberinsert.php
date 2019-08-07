<?php

include"../connection.php";

session_start();
$name = $_SESSION["user"];
$entryDate = date("M d, Y");
$leaveDate = "NULL";

$check="";
if(isset($_POST['submit']))
{
	$membername=$_POST['membername'];
	$occupation=$_POST['occupation'];
	$nid=$_POST['nid'];
	$phnno=$_POST['phnno'];
	
	/* echo"$deg </br>";echo"$name </br>";echo"$pass </br>";echo"$nid </br>";echo"$email </br>";echo"$phone </br>";
	echo"$address </br>";echo"$city </br>";
	echo"$occupation </br>";echo"$postcode </br>"; */
	
	
	$sqll=mysqli_query($conn,"Select * from addmember where nid='$nid' && username='$name' ");
	
	$sqll1=mysqli_query($conn,"Select * from addmember where phnno='$phnno' ");
	
	if(mysqli_num_rows($sqll)<>0 || mysqli_num_rows($sqll1)<>0)
	{
		$check = "[Alraedy Registered]";
		//echo"Registered";
	}
	else
	{
		//echo"ready to insert";
		//insert into addflat
		$sql=mysqli_query($conn,"INSERT INTO `addmember`(`id`, `membername`, `occupation`, `nid`, `phnno`,
		`entrydate`, `leavedate`, `username`) VALUES 
		('','$membername','$occupation','$nid','$phnno','$entryDate','$leaveDate','$name');");
		
		header('location:memberList.php');
	}
	
}

?>