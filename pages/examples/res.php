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
$bid=$_GET['bid'];

require('../../conn.php');

$suspend=mysqli_query($conn,"UPDATE USER 
	SET STATUS='1' 
	WHERE USERID='$bid'
	");

if ($suspend==true) {
	echo '<script type="text/javascript">
                swal({
	                    title: "Migori County Nurses Sacco Ltd.!",
	                    text: "Resumption Successful",
	                    icon: "success",
	                    button: "Okay"}).then(function(){
	                       window.location="/Nurses/pages/examples/agent.php";
	                       });
	       
	        </script>';
}


?>


</body>
</html>