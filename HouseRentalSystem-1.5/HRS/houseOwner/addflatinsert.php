<?php

include"../connection.php";

session_start();
$name = $_SESSION["user"];
$date = date("M d, Y");

$check="";
if(isset($_POST['submit']))
{
	$hname=$_POST['hname'];
	$rentertype=$_POST['rentertype'];
	$floorno=$_POST['floorno'];
	$roomno=$_POST['roomno'];
	$rentprice=$_POST['rentprice'];
	$description=$_POST['description'];
	
	/* echo"$deg </br>";echo"$name </br>";echo"$pass </br>";echo"$nid </br>";echo"$email </br>";echo"$phone </br>";
	echo"$address </br>";echo"$city </br>";
	echo"$occupation </br>";echo"$postcode </br>"; */
	
	
	$sqll=mysqli_query($conn,"Select * from addflat where hname='$hname' && 
	houseOwner='$name' && floorno='$floorno' && roomno='$roomno' ");
	
	if(mysqli_num_rows($sqll)<>0)
	{
		$check = "[Alraedy Registered]";
		//echo"Registered";
	}
	else
	{
		//echo"ready to insert";
		//insert into addflat
		$sql=mysqli_query($conn,"INSERT INTO `addflat`(`id`, `hname`, `rentertype`, `floorno`, `roomno`, `rentprice`,
		`description`, `date`,`houseOwner`) VALUES 
		('','$hname','$rentertype','$floorno','$roomno','$rentprice','$description','$date','$name')");
		
		header('location:flatList.php');
	}
	
}

?>