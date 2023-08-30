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
$type = mysqli_real_escape_string($conn, $_REQUEST['type']);

$id = $_SESSION['ID'];
$email = $_SESSION['user'];
$rname = $_SESSION['name'];

if (isset($_FILES['file'])) {
  # code...
  $filename  = uniqid().$_FILES['file']['name'];
  $filesize  =$_FILES['file']['size'];
  $filetmp   =$_FILES['file']['tmp_name'];
  $filetype  =$_FILES['file']['type'];
  $loc = "Documents/Reports/$filename";
}

date_default_timezone_set("Africa/Nairobi");
$Timestamp = date('Y-m-d H:i');



$sql = "INSERT INTO REPORT(USERID,NAME,TYPE,DOC,STAMP) VALUES ('$id','$name','$type','$loc','$Timestamp')";

	
	if ($conn->query($sql) === TRUE) {
	  # code...
    move_uploaded_file($filetmp,$loc);

    echo '<script type="text/javascript">
            swal({
                        title: "Migori County Nurses Sacco Ltd.!",
                        text: "Report Successfully Uploaded",
                        icon: "success",
                        button: "Okay"}).then(function(){
                           window.location="/Nurses/pages/forms/reportupload.php";
                           });
           
            </script>';

	}else{
		
	    echo '<script type="text/javascript">
              swal({
                          title: "Migori County Nurses Sacco Ltd.!",
                          text: "Server Error",
                          icon: "error",
                          button: "Okay"}).then(function(){
                             window.location="/Nurses/pages/forms/reportupload.php";
                             });
             
              </script>';
	}
		# code...
		
		
		


$conn->close();
?>

</body>
</html>