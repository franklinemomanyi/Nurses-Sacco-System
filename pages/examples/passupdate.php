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

include('connect.php');

$email = mysqli_real_escape_string($conn, $_GET['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
$NPassword = password_hash($password,PASSWORD_DEFAULT);
$password1 = mysqli_real_escape_string($conn, $_REQUEST['Password1']);


$sql = "UPDATE USER SET PASSWORD='$NPassword' WHERE EMAIL='$email'";


if ($password === $password1) {
	if ($conn->query($sql) === TRUE) {
		
			// echo '<script type="text/javascript">';
			// echo 'alert("Password Successfully Updated");';
	  //   	echo 'window.location="http://www.nelfixcomputers.co.ke/Nurses/pages/examples/login.html";';
	  //   	echo '</script>';

	    	echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Password Successfully Updated",
                            icon: "success",
                            button: "Okay"}).then(function(){
                               window.location="http://www.nelfixcomputers.co.ke/Nurses/pages/examples/login.html";
                               });
               
                </script>';
		
	}else {
	 //    echo '<script type="text/javascript">';
		// echo 'alert("Server Error");';
  //   	echo 'window.location="http://www.nelfixcomputers.co.ke/Nurses/pages/examples/newpassword.html";';
  //   	echo '</script>';

    	echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Server Error",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="http://www.nelfixcomputers.co.ke/Nurses/pages/examples/login.html";
                               });
               
                </script>';
	}
}else{
	// echo '<script type="text/javascript">';
	// echo 'alert("Passwords dont match");';
 //    echo 'window.location="http://www.nelfixcomputers.co.ke/Nurses/pages/examples/newpassword.html";';
 //    echo '</script>';

    echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Passwords dont match",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="http://www.nelfixcomputers.co.ke/Nurses/pages/examples/login.html";
                               });
               
                </script>';
}

$conn->close();
?>



</body>
</html>