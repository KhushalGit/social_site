<?php
include("includes/connection.php");
$query="select * from users";
$result=mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container"> 
<table class="table table-dark table-hover">
    <thead>
        <tr>
		<th colspan="9" ><h2>Student</h2></th>
		</tr>
    

     
	     
		  <th>First name</th>
		  <th>Last name</th>
		  <th>User Email</th>
		  <th>User Class</th>
		  <th>Gender</th>
		  <th>Birthdate</th>
		  <th>Status</th>
		  <th>Edit</th>
		  
	
	 <?php
	    while($rows = mysqli_fetch_assoc($result)) 
		{
	  ?>
	  	  <tbody>
	  <tr>

	      
		   <td><?php echo $rows['f_name']; ?></td>
		   <td><?php echo $rows['l_name']; ?></td>
		   <td><?php echo $rows['user_email']; ?></td>
		   <td><?php echo $rows['user_class']; ?></td>
		   <td><?php echo $rows['user_gender']; ?></td>
		   <td><?php echo $rows['user_birthday']; ?></td>
		   <td><?php echo $rows['status'];?></td>
		   <td><a href="edit.php?id=<?php echo $rows["user_id"]?> ">Edit</a></td>
				

		   
		   
		   
	  </tr>
	  <?php
		}
	 ?>
	 	  </tbody>
	 </table>
	 </div>
	 
</body>
</html>