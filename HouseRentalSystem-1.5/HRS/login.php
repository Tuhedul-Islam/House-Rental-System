<?php
require ('connection.php');
session_start();


$errmsg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$deg=validate($_POST['deg']);
	$email=validate($_POST['email']);
	$pass=validate($_POST['pass']);
	
	if($deg=="owner"){
		
		$sqll=mysqli_query($conn,"Select * from h_owner where email='$email' && pass='$pass'");
		
		if(mysqli_num_rows($sqll)>0)
		{
			$row=mysqli_fetch_assoc($sqll);
			$_SESSION["user"] =$row['name'];
			$_SESSION['permission']=true;
			header('location:houseOwner/houseOwner.php');
		}
		else
		{
			$errmsg="<span style='color:red'>Your Email or Password is wrong</span>";
			header('location:index.php');
		}
	}
	elseif($deg=="representative"){
		
		$sqll=mysqli_query($conn,"Select * from h_representative where email='$email' && pass='$pass'");
		
		if(mysqli_num_rows($sqll)>0)
		{
			$row=mysqli_fetch_assoc($sqll);
			$_SESSION["user"] =$row['name'];
			$_SESSION['permission']=true;
			header('location:houseRepresentative/houseRepresentative.php');
		}
		else
		{
			$errmsg="<span style='color:red'>Your Email or Password is wrong</span>";
			header('location:index.php');
		}
	}
	else{
		header('location:index.php');
	}
	
}

function validate($data)
	{
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}


?>
