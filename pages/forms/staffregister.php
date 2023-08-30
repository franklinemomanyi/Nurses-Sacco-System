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
$email = mysqli_real_escape_string($conn, $_REQUEST['mail']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$idnum = mysqli_real_escape_string($conn, $_REQUEST['id']);
$pob = mysqli_real_escape_string($conn, $_REQUEST['pob']);
$sub = mysqli_real_escape_string($conn, $_REQUEST['sub']);
$pno = mysqli_real_escape_string($conn, $_REQUEST['pno']);
$occup = mysqli_real_escape_string($conn, $_REQUEST['occup']);
$pobox = mysqli_real_escape_string($conn, $_REQUEST['pobox']);
$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
$kname = mysqli_real_escape_string($conn, $_REQUEST['kname']);
$kid = mysqli_real_escape_string($conn, $_REQUEST['kid']);
$kpobox = mysqli_real_escape_string($conn, $_REQUEST['kpobox']);
$krel = mysqli_real_escape_string($conn, $_REQUEST['krel']);
$wname = mysqli_real_escape_string($conn, $_REQUEST['wname']);
$wid = mysqli_real_escape_string($conn, $_REQUEST['wid']);
$wpobox = mysqli_real_escape_string($conn, $_REQUEST['wpobox']);
$wphone = mysqli_real_escape_string($conn, $_REQUEST['wphone']);
$ename = mysqli_real_escape_string($conn, $_REQUEST['ename']);
$eno = mysqli_real_escape_string($conn, $_REQUEST['eno']);
$epos = mysqli_real_escape_string($conn, $_REQUEST['epos']);
$eloc = mysqli_real_escape_string($conn, $_REQUEST['eloc']);

date_default_timezone_set("Africa/Nairobi");
$Timestamp = date('Y-m-d H:i');

$rand = rand(0000,9999);
$password = password_hash($rand, PASSWORD_DEFAULT);


$sql = "INSERT INTO USER (NAME,PHONE,IDNUM,EMAIL,PASSWORD,DOMAIN,STATUS,REGION,INFO,PNO,OCCUPATION,POB,POBOX,GENDER,KNAME,KIDNO,KPOBOX,KREL,WNAME,WIDNO,WPOBOX,WPHONE,ENAME,ENO,EPOS,ELOC,TIMEREG)
VALUES ('$name','$phone','$idnum','$email','$password',2,1,'$sub',1,'$pno','$occup','$pob','$pobox','$sex','$kname','$kid','$kpobox','$krel','$wname','$wid','$wpobox','$wphone','$ename','$eno','$epos','$eloc','$Timestamp')";

$sql1 = "SELECT PHONE,EMAIL,IDNUM FROM USER WHERE PHONE='$phone' OR EMAIL='$email' OR IDNUM='$idnum'";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result,MYSQLI_NUM);

if ($row[0]!=$phone) {
	if ($row[1]!=$email) {
		if ($row[2]!=$idnum) {
			# code...
			# code...
			if ($conn->query($sql) === TRUE) {
			# code...
		    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Member Successfully Registered",
                            icon: "success",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/examples/agent.php";
                               });
               
                </script>';



                date_default_timezone_set('Africa/Nairobi');
                require 'PHPMailer/PHPMailerAutoload.php';
                $mail = new PHPMailer;
                $mail->SMTPDebug = 0;                                 // Enable 
                $mail->isSMTP();                                      // Set 
                $mail->Host = 'smtp.gmail.com ';                      // Specify 
                $mail->SMTPAuth = true;                               // Enable 
                $mail->Username = 'migorinursessacco@gmail.com';           // SMTP 
                $mail->Password = 'migori2020';                         // SMTP 
                $mail->SMTPSecure = 'tls';                            // Enable 
                $mail->Port = 587;                                    // TCP port 
                $mail->setFrom('migorinursessacco@gmail.com', 'Administrator');
                $mail->addAddress($email);                   // Add a 
                $mail->addReplyTo('migorinursessacco@gmail.com');
                $mail->isHTML(true);                                   
                $mail->Subject = 'ACCOUNT PASSWORD:';
                $mail->Body    = 'Your new Account Password is '.$rand.' <br/>
                N/B: Do not share this password with Anyone.<br/><br/><br/>New Account Password.<br/>Migori County Nurses Sacco Ltd.<br/>Migori County Government.';
                $mail->AltBody = '/Nurses/pages/examples/forgot.html';
                $mail->send();
          


		}else{
			
		    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Server Error",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/agentregister.php";
                               });
               
                </script>';
		}
		# code...
		
		}else{

		    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "ID Number already used!",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/agentregister.php";
                               });
               
                </script>';
		}
		
	}else{

	    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Email already used!",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/agentregister.php";
                               });
               
                </script>';
	}
	# code...
}else{
	
    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Phone Number already used!",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/agentregister.php";
                               });
               
                </script>';
}

$conn->close();
?>

</body>
</html>