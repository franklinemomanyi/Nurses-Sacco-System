<?php
require('../../conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <?php
     require('../../sweetalert.php');
  ?>
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed sidebar-collapse">
<?php
    $idnum=$_GET['idnum'];
    $amount=$_GET['amount'];
    
    $sql="SELECT TAX FROM BUSINESS WHERE ACCOUNT='$idnum'";
    $results=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($results);
    if ($amount>=$row[0]) {
      # code...
      include('free.php');
    }else{
      
      echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.",
                            text: "Cannot generate Permit: Insufficient Payments!",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/examples/payments.php";
                               });
               
                </script>';
    }
?>

</body>
</html>