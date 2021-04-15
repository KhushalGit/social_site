<?php
   include("includes/connection.php");
   
   if(isset($_POST['sign_up'])){

		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$class = htmlentities(mysqli_real_escape_string($con,$_POST['u_class']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
		$status = "0";
		$posts = "no";
		$newgid = sprintf('%05d', rand(0, 999999));

		$username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
		$check_username_query = "select user_name from users where user_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if(strlen($pass) <5 ){
			echo"<script>alert('Password should be minimum 9 characters!')</script>";
			exit();
		}

	
		
		

		$rand = rand(1, 3); //Random number between 1 and 3

			if($rand == 1)
				$profile_pic = "adminloginpng.png";
			else if($rand == 2)
				$profile_pic = "ClientLogincol2.png";
			else if($rand == 3)
				$profile_pic = "tata.png";
			
			
			$query1="SELECT * FROM users WHERE user_email='$email' ";

$result=mysqli_query($con,$query1);

    // output data of each row
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result)) {
echo "<script>alert('Email already exist, Please try using another email')</script>";
}}else{
		
		$insert = "insert into users (f_name,l_name,user_name,describe_user,education,user_pass,user_email,user_class,user_gender,user_birthday,user_image,user_cover,user_reg_date,status,posts,recovery_account)
		values('$first_name','$last_name','$username','Hello .This is my default status!','...','$pass','$email','$class','$gender','$birthday','$profile_pic','default.jpg',NOW(),'$status','$posts','khushal ....')";
		
		$query = mysqli_query($con, $insert);
   }
		if($query){
			echo "<script>alert('Well Done $first_name, you are good to go.')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}

		else
{
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
	}
   
?>