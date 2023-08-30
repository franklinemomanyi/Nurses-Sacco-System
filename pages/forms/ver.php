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
$location = mysqli_real_escape_string($conn, $_REQUEST['location']);
$emp = mysqli_real_escape_string($conn, $_REQUEST['emp']);
$size = mysqli_real_escape_string($conn, $_REQUEST['size']);


$sql1 = "SELECT TYPE,USERID,NAME FROM BUSINESS WHERE BUSSID='$name'";
$result = mysqli_query($conn,$sql1);
$row = mysqli_fetch_array($result);

$sql2 = "SELECT * FROM BUSSTYPE WHERE BUSSTYPE='$row[0]' ";
$result1 = mysqli_query($conn,$sql2);
$row1 = mysqli_fetch_array($result1);

$sql3 = "SELECT * FROM USER WHERE USERID='$row[1]'";
$result2 = mysqli_query($conn,$sql3);
$row2 = mysqli_fetch_array($result2);

$sql4 = "SELECT REGION FROM REGION WHERE ID='$location'";
$result3 = mysqli_query($conn,$sql4);
$row3 = mysqli_fetch_array($result3);

$tax = (($location.'.'.$emp.''.$size)*1000)+$row1[2];
$formated_tax = number_format((float)$tax,2,'.','');

$sql = "UPDATE BUSINESS SET STAGE='3',NOEMP='$emp',AREA='$size',REGION='$location',TAX='$formated_tax' WHERE BUSSID='$name'";

if ($conn->query($sql) === TRUE) {
# code...



                $url = 'https://quicksms.advantasms.com/api/services/sendsms/';
                $curl = curl_init();
                $sms = 'Dear '.$row2[1].' of ID Number '.$row2[3].', We are pleased to inform you that your Business '.$row[2].' located in '.$row3[0].' has been succesfully verified . You are hereby required to pay Ksh.'.$formated_tax.' to the Account Number '.$row2[3].$name.' to finish your Business Appliction Process.All the best in your business. Tulipe Ushuru Tujitegemee ';
                curl_setopt($curl, CURLOPT_URL, $url);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json')); //setting custom header
                $curl_post_data = array(
                        //Fill in the request parameters with valid values
                        'partnerID' =>356,
                        'apikey' => '5d2c1a9627a94',
                        'mobile' => $row2[2],
                        'message' => $sms,
                        'shortcode' => 'INFOTEXT',
                        'pass_type' => 'plain', //bm5 {base64 encode} or pla
                );
              
                $data_string = json_encode($curl_post_data);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
              
                $curl_response = curl_exec($curl);
                $obj = json_decode($curl_response, true);
                $httpcode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
                //   $code= $httpcode;
                //   echo $code;


echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Successful Validation",
                            icon: "success",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/tables/data.php";
                               });
               
                </script>';


}else{

echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Unsuccessfull Validation",
                            icon: "success",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/verification.php";
                               });
               
                </script>';

}
# code...

		


$conn->close();
?>


</body>
</html>