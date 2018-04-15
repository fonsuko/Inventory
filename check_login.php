<?php
	session_start();
	$con = mysqli_connect("localhost","root","");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	mysqli_select_db($con, "ims");

	$strSQL = "SELECT * FROM member WHERE username = '".mysqli_real_escape_string($con,$_POST['user'])."'
	and pass = '".mysqli_real_escape_string($con,$_POST['password'])."'";
	$objQuery = mysqli_query($con,$strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			echo $objResult["username"];

			$_SESSION["username"] = $objResult["username"];
			$_SESSION["firstname"] = $objResult["firstname"];
			$_SESSION["lastname"] = $objResult["lastname"];
			$_SESSION["type"] = $objResult["type"];

			session_write_close();

	}
	mysqli_close($con);

	if ($_SESSION["type"]=="staff"){
		header("Location: indexreal.php");
	} else if ($_SESSION["type"]=="seller"){
		header("Location: indexseller.php");
	} else {

	}
?>
