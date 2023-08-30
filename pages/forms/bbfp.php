<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php
     require('../../sweetalert.php');
  ?>
</head>
<body>


<?php

 require('../../conn.php');

$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$rel = mysqli_real_escape_string($conn, $_REQUEST['rel']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$id = $_SESSION['ID'];
$email = $_SESSION['user'];
$rname = $_SESSION['name'];

if (isset($_FILES['file'])) {
  # code...
  $filename  = uniqid().$_FILES['file']['name'];
  $filesize  =$_FILES['file']['size'];
  $filetmp   =$_FILES['file']['tmp_name'];
  $filetype  =$_FILES['file']['type'];
  $loc = "Documents/BBF/$filename";
}

date_default_timezone_set("Africa/Nairobi");
$Timestamp = date('Y-m-d H:i');


  date_default_timezone_set('Africa/Nairobi');
  require 'PHPMailer/PHPMailerAutoload.php';
  $mail = new PHPMailer;
  $mail->SMTPDebug = 0;                                 
  $mail->isSMTP();                                      
  $mail->Host = 'smtp.gmail.com ';                      
  $mail->SMTPAuth = true;                               
  $mail->Username = 'migorinursessacco@gmail.com';           
  $mail->Password = 'migori2020';                         
  $mail->SMTPSecure = 'tls';                            
  $mail->Port = 587;                                    
  $mail->setFrom('migorinursessacco@gmail.com', 'Administrator');
  $mail->addAddress($email);                   
  $mail->addReplyTo('migorinursessacco@gmail.com');
  $mail->isHTML(true);                                   
  $mail->Subject = 'BENEVOLENT FUND APPLICATION:';
  $mail->Body    = 'Hello '.$rname.'<br/><br/>We are sorry for the Demise of your '.$rel.' ,'.$name.' <br/>
  Receive out heart felt Condolences as Migori Nurses Sacco Ltd.<br/>

  This is to inform you that we have received your BENEVOLENT FUND APPLICATION and it is being processed.<br/>
  We will send the Funds as soon as the Application is successsful.
  N/B: <br/><br/><br/><br/>Migori County Nurses Sacco Ltd.<br/>Migori County Government.';
  $mail->AltBody = '/Nurses/pages/examples/forgot.html';

    



$sql = "INSERT INTO BBF(USERID,DECEASED,RELATIONSHIP,DEATH,CERT,STAMP,STATUS) VALUES ('$id','$name','$rel','$date','$loc','$Timestamp',0)";

	
	if ($conn->query($sql) === TRUE) {
	  # code...
    move_uploaded_file($filetmp,$loc);

    echo '<script type="text/javascript">
            swal({
                        title: "Migori County Nurses Sacco Ltd.!",
                        text: "BBF Successfully Applied",
                        icon: "success",
                        button: "Okay"}).then(function(){
                           window.location="/Nurses/pages/forms/bbf.php";
                           });
           
            </script>';
    $mail->send();

	}else{
		
	    echo '<script type="text/javascript">
              swal({
                          title: "Migori County Nurses Sacco Ltd.!",
                          text: "Server Error",
                          icon: "error",
                          button: "Okay"}).then(function(){
                             window.location="/Nurses/pages/forms/bbf.php";
                             });
             
              </script>';
	}
		# code...
		
		
		


$conn->close();
?>

</body>
</html>