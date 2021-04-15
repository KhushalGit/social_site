<!DOCTYPE html>
<?php
session_start();
include("includes/connection.php");


?>
<!--<html>
<head>
	
	<title>Forgotten Password</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #123;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
</style>
<body>
<div class="row">
    	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">RCP BOOK</h1></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>change Your Password</strong></h3>
			</div>
			<div class="l_pass">
				<form action="" method="post">
					<!--<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input id="password" type="password" class="form-control" placeholder=" New Password" name="pass" required>
					</div><br>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						<input id="password" type="password" class="form-control" placeholder="Re-enter Password" name="pass1" required>
					</div><br>
					
					<center><button id="signup" class="btn btn-info btn-lg" name="change">change password</button></center>
				</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>-->
<?php

  /* if (isset($_POST['change']))
   {
	   $user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_id= $row['user_id'];
		
	      $pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));
		  $pass1 = htmlentities(mysqli_real_escape_string($con, $_POST['pass1']));
		  
		  if($pass == $pass1)
		  {
			  
			  if(strlen($pass) >= 6 && strlen(pass <= 60))
			  {
				  $update = "update users set user_pass='$pass' where user_id=$'user_id' ";
				  $run= mysqli_query($con, $update);
				  echo"<script>alert('Your password is changed a moment ago')</script>";
				   echo"<script>window.open('home.php','_self')</script>";
			  }
			  else
			  {
				 echo"<script>alert('Your password should be greter than 6 words')</script>";
			  }
		  }
		  else{
			        echo"<script>alert('Your password did not match')</script>";
				   echo"<script>window.open('change_password.php','_self')</script>";
		  }
		  
   }*/
?>
<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #e6e6e6;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
		margin-bottom: 5px;
	}
	.well{
		background-color: #123;
	}
	#signin{
		width: 60%;
		border-radius: 30px;
	}
</style>
<body>
<div class="row">
    	<div class="col-sm-12">
		<div class="well">
			<center><h1 style="color: white;">RCP BOOK</h1></center>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="main-content">
			<div class="header">
				<h3 style="text-align: center;"><strong>Email Successfully Sent to Your Account..</strong></h3>
			</div>
			<div class="l_pass">
				<form action="" method="post">
					<div class="input-group">
						<!--<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
						<div class="header">
					<a href="signin.php" style=" font-size:40px;"><h3 style="text-align: center;">Login Here....</h3></a>
					
						<!--<input id="email" type="email" class="form-control" placeholder=" Enter your Email" name="email" required>
					--></div><br>
							</form>
			</div>
		</div>
	</div>
	</div>
</body>
</html>


