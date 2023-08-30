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
$mail = mysqli_real_escape_string($conn, $_REQUEST['mail']);
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

// $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
// $passwordc = mysqli_real_escape_string($conn, $_REQUEST['passwordc']);
// $Npassword = password_hash($password,PASSWORD_DEFAULT);
// $domain = mysqli_real_escape_string($conn, $_REQUEST['type']);
// $region = mysqli_real_escape_string($conn, $_REQUEST['region']);

// $sql = "INSERT INTO USER (NAME,PHONE,IDNUM,EMAIL,PASSWORD,DOMAIN,STATUS,REGION)
// VALUES ('$name','$number','$idnum','$mail','$Npassword','$domain','0','$region')";

$ses = $_SESSION['ID'];

$sql = "UPDATE USER SET NAME='$name',PHONE='$phone',IDNUM='$idnum',EMAIL='$mail',REGION='$sub',INFO=1,PNO='$pno',OCCUPATION='$occup',POB='$pob',POBOX='$pobox',GENDER='$sex',KNAME='$kname',KIDNO='$kid',KPOBOX='$kpobox',KREL='$krel',WNAME='$wname',WIDNO='$wid',WPOBOX='$wpobox',WPHONE='$wphone',ENAME='$ename',ENO='$eno',EPOS='$epos',ELOC='$eloc',TIMEREG='$Timestamp' WHERE `USERID`='$ses'";


// $sql1 = "SELECT PHONE,EMAIL,IDNUM FROM user";
// $result = mysqli_query($conn,$sql1);
// $row = mysqli_fetch_array($result,MYSQLI_NUM);

			
		if ($conn->query($sql) === TRUE) {
		# code...
	    echo '<script type="text/javascript">
              swal({
                          title: "Migori County Nurses Sacco Ltd.!",
                          text: "Profile Successfully Updated",
                          icon: "success",
                          button: "Okay"}).then(function(){
                             window.location="/Nurses/index.php";
                             });
             
              </script>';


		}else{
			
		    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Server Error",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/index.php";
                               });
               
                </script>';
		}
		


$conn->close();
?>

</body>
</html>