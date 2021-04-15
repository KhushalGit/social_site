<!DOCTYPE html>
<?php
session_start();
include("includes/header.php");

if(!isset($_SESSION['user_email'])){
	header("location: index.php");
}
?>
<html>
<head>
	<?php
		$user = $_SESSION['user_email'];
		$get_user = "select * from users where user_email='$user'";
		$run_user = mysqli_query($con,$get_user);
		$row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
	?>
	<title>Edit Account Setting</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/home_style2.css">
</head>
<body>
<div class="row">
      <div class="col-sm-2">
	  </div>
	  <div class="col-sm-8">
	      <form action="" method="post" enctype="multipart/form-data">
		         <table class="table table-bordered table-hover">
				     <tr align="center">
					       <td colspan="6" class="active"><h2>Edit Your Profile</h2></td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Change Your First Name</td>
							  <td>
							           <input class="form-control" type="text" name="f_name" required value="<?php echo $first_name ; ?>">
							  </td>
					 </tr>
					  <tr>
					          <td style="font-weight: bold;">Change Your Last Name</td>
							  <td>
							           <input class="form-control" type="text" name="l_name" required value="<?php echo $last_name ; ?>">
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Change Your Username</td>
							  <td>
							           <input class="form-control" type="text" name="u_name" required value="<?php echo $user_name ; ?>">
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Description</td>
							  <td>
							           <input class="form-control" type="text" name="describe_user" required value="<?php echo $describe_user ; ?>">
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Education</td>
							  <td>
							           <input class="form-control" type="text" name="education" required value="<?php echo $education ; ?>">
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Password</td>
							  <td>
							           <input class="form-control" type="password" name="u_pass" id="mypass" required value="<?php echo $user_pass ; ?>">
									   <input type="checkbox" onclick="show_password()"><strong>Show Password</strong>
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Change Your Email</td>
							  <td>
							           <input class="form-control" type="email" name="u_email" required value="<?php echo $user_email ; ?>">
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Change Your Class</td>
							  <td>
							           <select class="form-control" name="u_class">
									   <option ><?php echo$user_class ; ?></option>
							           <option>BCA</option>
							           <option>BBA</option>
							           <option>BBM</option>
						               <option>IMCA</option>
							           <option>MMS</option>
							           <option>MCA</option>
									   </select>
							  </td>
					 </tr>
					  <tr>
					          <td style="font-weight: bold;">Gender</td>
							  <td>
							           <select class="form-control" name="u_gender">
									   <option ><?php echo $user_gender ; ?></option>
							            <option>Male</option>
							            <option>Female</option>
							            <option>Other</option>
									   </select>
							  </td>
					 </tr>
					 <tr>
					          <td style="font-weight: bold;">Brith Date</td>
							  <td>
							           <input class="form-control input-md" type="date" name="u_birthday" required value="<?php echo $user_birthday ; ?>">
							  </td>
					 </tr>
					      <!-- recover Password option 
						  <tr>
						        <td style="font-weight: bold;">Forgotten Password</td>
								<td>
								   <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModel">Turn On</button>
								   <div id="myModel" class="modal fade" role="dialog">
								          <div class="modal-dialog">
										          <div class="model-content">
												         <div class="model-header">
														       <button type="button" class="close" data-dismiss="model">&times;</button>
															   <h4 class="modal-title">Model Header</h4>
								                         </div>
														 <div class="model-body">
														       <form action="recovery.php?id<?php //echo $user_id; ?>" method="post" id="f">
															        <h4>What is your College Best Friend Name?</h4>
																	<textarea class="form-control" cols="83" rows="4" name="content" placeholder="someone"></textarea><br>
																	<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;" ><br><br>
																	<pre>Answer the above question we will ask this question if you forgot your <br> password</pre>
															   </form>
															    <?php
																		/*if(isset($_POST['sub']))
																		{
																			$bfn = htmlentities($_POST['content']);
					
					
																		if($bfn =='')
																	  {
																		  echo"<script>alert('Please enter something')</script>";
																		  echo"<script>window.open('edit_profile.php?u_id$user_id','_self')</script>";
																		  exit();
																	  }
																	  else{
																		  $update = "update users set recovery_account='$bfn' where user_id='$user_id'";
																		  
																		  $run = mysqli_query($con,$update);
																		  
																		  if($run){
																			    echo"<script>alert('Working...')</script>";
																				
																				echo"<script>window.open('edit_profile.php?u_id$user_id', '_self')</script>";
																		  }
																		  else{
																			  echo"<script>alert('Error while Updating Information')</script>";
																				
																				echo"<script>window.open('edit_profile.php?u_id$user_id', '_self')</script>";

																		  }
																	  }
																	}*/
														  ?>
														 </div>
														 <div class="modal-footer">
														     <button type="button" class="btn btn-default" data-dismiss="model">Close</button>
														 </div>
												 </div>
										 </div>	 
									</div>			    
								</td>
						  </tr>-->
						  <tr align="center">
						     <td colspan="6">
							   <input type="submit" class="btn btn-info" name="update" style="width: 250px;" value="Update">
							 </td>
						  </tr>
				 </table>
		  </form>
		 
	  </div>
	  <div class="col-sm-2">
	  </div>
</div>
</body>
</html>
<?php
    if(isset($_POST['update']))
	{
		$f_name = htmlentities($_POST['f_name']);
		$l_name = htmlentities($_POST['l_name']);
		$u_name = htmlentities($_POST['u_name']);
		$describe_user = htmlentities($_POST['describe_user']);
		$education = htmlentities($_POST['education']);
		$u_pass = htmlentities($_POST['u_pass']);
		$u_email = htmlentities($_POST['u_email']);
		$u_class = htmlentities($_POST['u_class']);
		$u_gender = htmlentities($_POST['u_gender']);
		$u_birthday = htmlentities($_POST['u_birthday']);
		
		$update = "update users  set f_name='$f_name', l_name='$l_name', user_name='$u_name',describe_user='$describe_user',education='$education',
		user_pass='$u_pass',user_email='$u_email',user_class='$u_class',user_gender='$u_gender',user_birthday='$u_birthday' where user_id='$user_id'";
		
          $run = mysqli_query($con,$update);
																		  
		 if($run)
		 {
	         echo"<script>alert('Your Profile Updated ')</script>";
																				
		     echo"<script>window.open('edit_profile.php?u_id$user_id', '_self')</script>";
		}		
		
		
	}
?>