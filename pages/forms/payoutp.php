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
$amount = mysqli_real_escape_string($conn, $_REQUEST['amount']);
$reason = mysqli_real_escape_string($conn, $_REQUEST['reason']);

$id = $_SESSION['ID'];
$email = $_SESSION['user'];
$rname = $_SESSION['name'];

if (isset($_FILES['file'])) {
  # code...
  $filename  = uniqid().$_FILES['file']['name'];
  $filesize  =$_FILES['file']['size'];
  $filetmp   =$_FILES['file']['tmp_name'];
  $filetype  =$_FILES['file']['type'];
  $loc = "Documents/Payouts/$filename";
}


date_default_timezone_set("Africa/Nairobi");
$Timestamp = date('Y-m-d H:i');

$sql = "INSERT INTO PAYOUTS (USERID,AMOUNT,REASON,CHEQUE,STAMP) VALUES ('$name','$amount','$reason','$loc','$Timestamp')";

	
	if ($conn->query($sql) === TRUE) {
	  # code...
    move_uploaded_file($filetmp,$loc);

    echo '<script type="text/javascript">
            swal({
                        title: "Migori County Nurses Sacco Ltd.!",
                        text: "Payout Successfully Recorded",
                        icon: "success",
                        button: "Okay"}).then(function(){
                           window.location="/Nurses/pages/forms/add.php";
                           });
           
            </script>';

	}else{
		
	    echo '<script type="text/javascript">
              swal({
                          title: "Migori County Nurses Sacco Ltd.!",
                          text: "Server Error",
                          icon: "error",
                          button: "Okay"}).then(function(){
                             window.location="/Nurses/pages/forms/add.php";
                             });
             
              </script>';
	}
		# code...
		
		
		


$conn->close();
?>

</body>
</html>