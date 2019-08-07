<?php

include"../connection.php";

session_start();
$name = $_SESSION["user"];
$date = date("M d, Y");

$check="";
if(isset($_POST['submit']))
{
	$hname=$_POST['hname'];
	$floorno=$_POST['floorno'];
	$roomno=$_POST['roomno'];
	$representativephn=$_POST['representativephn'];
	
	/* echo"$deg </br>";echo"$name </br>";echo"$pass </br>";echo"$nid </br>";echo"$email </br>";echo"$phone </br>";
	echo"$address </br>";echo"$city </br>";
	echo"$occupation </br>";echo"$postcode </br>"; */
	
	
	$sqll=mysqli_query($conn,"Select * from flatrent where hname='$hname' && houseOwner='$name' &&
	floorno='$floorno' && roomno='$roomno' ");
	
	if(mysqli_num_rows($sqll)<>0)
	{
		$check = "[Alraedy Rented]";
		//echo"Registered";
	}
	else
	{
		//echo"ready to insert";
		//insert into flatrent
		$sql=mysqli_query($conn,"INSERT INTO `flatrent`(`id`, `hname`, `floorno`, `roomno`, `representativephn`,
		`date`, `houseOwner`)
		VALUES ('','$hname','$floorno','$roomno','$representativephn','$date','$name')");
		
		header('location:RentList.php');
	}
	
}

?>