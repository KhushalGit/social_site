<?php
session_start();

 include("includes/connection.php");

	if (isset($_POST['login']))
   {

		$email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

		$select_user = "select * from adminlogin where aemail='$email' AND apass='$pass' ";
		$query= mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if($check_user == 1)
		{
			$_SESSION['aemail'] = $email;

			echo "<script>window.open('adminpanel.php', '_self')</script>";
		}else
		  {
			echo"<script>alert('Your Email or Password is incorrect')</script>";
		  }
	}
?>