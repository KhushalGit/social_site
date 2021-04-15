<?php
include("includes/connection.php");
if(isset($_REQUEST["id"]))
	{
	$id=$_REQUEST["id"];
	
	$query="SELECT * FROM users WHERE user_id='$id'";
	$result=mysqli_query($con, $query);
	
	$rows=mysqli_fetch_array($result);
	
	if(isset($_REQUEST["submit"]))
	{
		$status=$_REQUEST["status"];
		
$sql = "UPDATE users SET status='$status' WHERE user_id='$id'";
$result=mysqli_query($con, $sql);
include ("1.php");
header('location:adminpanel.php');

	}
}
?>


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
<form  method="post">


<div class="container" style="top-padding:50%;">
<table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Status</th>
        <th>Varified/non-varified</th>
		<th>Email</th>
        <th>Approve</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td><input type="text" name="status" value="<?php echo $rows["status"]?>"></td>
		<td><input type="email" name="email" value="<?php echo $rows["user_email"]?>"></td>
        <td><input type="submit" name="submit" value="send" ></td>
      </tr>
          </tbody>
  </table>
</div>
</form>
</body>
</html>