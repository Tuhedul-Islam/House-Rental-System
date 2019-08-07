<?php

include"connection.php";

$check="";
if(isset($_POST['submit']))
{
	// 28 var ... first work
	//person...
	$deg=$_POST['deg'];
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$nid=$_POST['nid'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$occupation=$_POST['occupation'];
	$postcode=$_POST['postcode'];
	
	
	/* echo"$deg </br>";echo"$name </br>";echo"$pass </br>";echo"$nid </br>";echo"$email </br>";echo"$phone </br>";
	echo"$address </br>";echo"$city </br>";
	echo"$occupation </br>";echo"$postcode </br>"; */
	
	
	if($deg=="owner")
	{
		$sqll=mysqli_query($conn,"Select * from h_owner where email='$email'");
		
		if(mysqli_num_rows($sqll)<>0)
		{
			$check = "[Alraedy Registered]";
		}
		else
		{
			//insert into h_owner
			$sql=mysqli_query($conn,"INSERT INTO `h_owner`(`id`, `deg`, `name`, `pass`, `nid`, `email`, `phnno`,
			`address`, `city`, `occupation`, `postcode`) VALUES ('','$deg','$name','$pass','$nid','$email',
			'$phone','$address','$city','$occupation','$postcode')");
			
		}
	}
	elseif($deg=="representative")
	{
		$sqll=mysqli_query($conn,"Select * from h_representative where email='$email'");
		
		if(Mysqli_num_rows($sqll)<>0)
		{
			$check = "[Alraedy Registered]";
		}
		else
		{
			//insert into h_representative
			$sql=mysqli_query($conn,"INSERT INTO `h_representative`(`id`, `deg`, `name`, `pass`, `nid`, `email`, `phnno`,
			`address`, `city`, `occupation`, `postcode`) VALUES ('','$deg','$name','$pass','$nid','$email',
			'$phone','$address','$city','$occupation','$postcode')");
		}
	}
	else
	{
		echo "Sorry to insert data";
	}
	
	
}

?>