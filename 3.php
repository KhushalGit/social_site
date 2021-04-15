<?php
//error_reporting(0);
//mysqli_connect("localhost","root","");
//mysql_select_db("social_network");

include 'includes/connection.php';
$email=$_REQUEST["email"];
$query="SELECT * FROM users WHERE user_email='$email' ";

$result=mysqli_query($con,$query);

    // output data of each row
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo "id: " . $row["f_name"]. " ";
    



//$row=mysql_fetch_array($query);

require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
  $mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "radhikasonawane13@gmail.com";
  $mail->Password = "8007660429";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "radhikasonawane13@gmail.com";
  $mail->FromName = "IMRD BOOK";
  
  $mail->addAddress($row["user_email"]);
  
  $mail->isHTML(true);
 
   $mail->Subject = "Password";
  $mail->Body = "<b>Your Password:</p>".$row["user_pass"];
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
  // echo "Mailer Error: " . $mail->ErrorInfo;
	header("location: change_password.php");
  }
  else
  {  	header("location: change_password.php");
  }
  }
} else {
    echo "Enter Valid Email";
}

  ?>