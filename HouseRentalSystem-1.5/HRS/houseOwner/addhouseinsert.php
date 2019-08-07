<?php

include"../connection.php";

session_start();
$name = $_SESSION["user"];
$date = date("M d, Y");

$check="";
if(isset($_POST['submit']))
{
	$city=$_POST['city'];
	$area=$_POST['area'];
	$houseName=$_POST['housename'];
	$address=$_POST['address'];
	$description=$_POST['description'];
	
	/* echo"$deg </br>";echo"$name </br>";echo"$pass </br>";echo"$nid </br>";echo"$email </br>";echo"$phone </br>";
	echo"$address </br>";echo"$city </br>";
	echo"$occupation </br>";echo"$postcode </br>"; */
	
	
	$sqll=mysqli_query($conn,"Select * from addhouse where selectArea='$area' && 
	houseName='$houseName' && houseOwner='$name' ");
	
	if(mysqli_num_rows($sqll)<>0)
	{
		$check = "[Alraedy Registered]";
		//echo"Registered";
	}
	else
	{
		//echo"ready to insert";
		//insert into addhouse
		$sql=mysqli_query($conn,"INSERT INTO `addhouse`(`id`, `selectCity`, `selectArea`, `houseName`, `address`,
		`description`, `houseOwner`, `date`) VALUES ('','$city','$area','$houseName','$address','$description',
		'$name', '$date')");
		header('location:houseOwner.php');
	}
	
}

?>