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

$suspend=mysqli_query($conn,"UPDATE BBF 
	SET STATUS='2' 
	WHERE ID='$bid'
	");

if ($suspend==true) {
	echo '<script type="text/javascript">
                swal({
	                    title: "Migori County Nurses Sacco Ltd.!",
	                    text: "Rejection Successful",
	                    icon: "success",
	                    button: "Okay"}).then(function(){
	                       window.location="/Nurses/pages/examples/bbf.php";
	                       });
	       
	        </script>';
}


?>


</body>
</html>