<!DOCTYPE html>
<html>
  <head>
     <title>IMRD BOOK</title>
	    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <style>
      body
	         {
		        overflow-x:hidden;                                                      <!-- Remove horizontal bar -->
	          }
			  #signup{
				  width: 60%;
				  border-radius: 30px;
			  }
			  #login{
				  width: 60%;
				  background-color: #fff;
				  border: 1px solid #1da1f2;
				  color: #1da1f2;
				  border-radius: 30px;
			  }
			  #login:hover{
				  width: 60%;
				  background-color: #fff;
				  color: #1da1f2;
				  border: 2px solid  #1da1f2;
				  border-radius: 30px;
			  }
			  .well{
				  background-color: #123;
				  
			  }
  </style>
    <body>
	     <div class="row">
		      <div class="col-sm-12">
				  <div class="well">                                               <!-- default class of boostrap -->
				  <center><h2>R.C.Patel Institute of Management Research & Development ,Shirpur</h2></center>
					     <center><h1 style="color:white;">IMRD BOOK</h1></center>
				 </div>
		      </div>
		 </div>
		  <div class="row">
		       <div class="col-sm-6" style="left:0.5%;">
			     <img src="imagewebsite/imrdbuild.jpg" class="img-rounded" title="Digital Media" width="650px"
				 height="565px">
			   </div>
			     <div class="col-sm-6" style="left:8%;">
				   <img src="imagewebsite/logo.png" class="img-rounded" title="Digital Media" width="80px"
				    height="80px">
					<h2><strong>See what's happening in <br> the world right now</strong></h2><br><br>
					<h4><strong>Join RCP BOOK Today......</strong></h4>
					 <form method="post" action="">
					       <a href="signup.php" button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button></a><br><br>
						      <?php
							     if(isset($_POST[ ' signup ' ]))
								 {
									 echo "<script>window.open(' signup.php', '_self  ')</script>";
								 }
							  ?>
							  <a href="signin.php" button id="login" class="btn btn-info btn-lg" name="login">Login</button></a><br><br>
						     <?php
							     if(isset($_POST[ ' login ' ]))
								 {
									 echo "<script>window.open('signin.php', '_self  ')</script>";
								 }
							  ?>
						   
					 </form>
				  </div>
		  </div>
  
   </body>
</html>