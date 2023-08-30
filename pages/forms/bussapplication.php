<?php
   require('../../conn.php');
   require('../../sweetalert.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>


<?php

$amt = mysqli_real_escape_string($conn, $_REQUEST['amt']);
$amtwrd = mysqli_real_escape_string($conn, $_REQUEST['amtwrd']);
$repp = mysqli_real_escape_string($conn, $_REQUEST['repp']);
$krapin = mysqli_real_escape_string($conn, $_REQUEST['pin']);
$g1name = mysqli_real_escape_string($conn, $_REQUEST['g1name']);
$g1id = mysqli_real_escape_string($conn, $_REQUEST['g1id']);
$g1phone = mysqli_real_escape_string($conn, $_REQUEST['g1phone']);
$g1amt = mysqli_real_escape_string($conn, $_REQUEST['g1amt']);
$g2name = mysqli_real_escape_string($conn, $_REQUEST['g2name']);
$g2id = mysqli_real_escape_string($conn, $_REQUEST['g2id']);
$g2phone = mysqli_real_escape_string($conn, $_REQUEST['g2phone']);
$g2amt = mysqli_real_escape_string($conn, $_REQUEST['g2amt']);

$g3name = mysqli_real_escape_string($conn, $_REQUEST['g1name']);
$g3id = mysqli_real_escape_string($conn, $_REQUEST['g1id']);
$g3phone = mysqli_real_escape_string($conn, $_REQUEST['g1phone']);
$g3amt = mysqli_real_escape_string($conn, $_REQUEST['g1amt']);

date_default_timezone_set("Africa/Nairobi");
$Timestamp = date('Y-m-d H:i');


if (isset($_POST['submit'])) {
	# code...
	if((isset($_FILES['idf'])) && (isset($_FILES['slip1f'])) && (isset($_FILES['slip2f'])) && (isset($_FILES['g1idf'])) && (isset($_FILES['g2idf'])) && (isset($_FILES['g3idf']))){
      $errors= array();

      $filename1  = uniqid().$_FILES['idf']['name'];
      $filesize1  =$_FILES['idf']['size'];
      $filetmp1   =$_FILES['idf']['tmp_name'];
      $filetype1  =$_FILES['idf']['type'];

      $filename2   = uniqid().$_FILES['slip1f']['name'];
      $filesize2   =$_FILES['slip1f']['size'];
      $filetmp2    =$_FILES['slip1f']['tmp_name'];
      $filetype2   =$_FILES['slip1f']['type'];

      $filename3   = uniqid().$_FILES['slip2f']['name'];
      $filesize3   =$_FILES['slip2f']['size'];
      $filetmp3    =$_FILES['slip2f']['tmp_name'];
      $filetype3   =$_FILES['slip2f']['type'];

      $filename4   = uniqid().$_FILES['g1idf']['name'];
      $filesize4   =$_FILES['g1idf']['size'];
      $filetmp4    =$_FILES['g1idf']['tmp_name'];
      $filetype4   =$_FILES['g1idf']['type'];

      $filename5   = uniqid().$_FILES['g2idf']['name'];
      $filesize5   =$_FILES['g2idf']['size'];
      $filetmp5    =$_FILES['g2idf']['tmp_name'];
      $filetype5   =$_FILES['g2idf']['type'];

      $filename6   = uniqid().$_FILES['g3idf']['name'];
      $filesize6   =$_FILES['g3idf']['size'];
      $filetmp6    =$_FILES['g3idf']['tmp_name'];
      $filetype6   =$_FILES['g3idf']['type'];
    
    
    
      
      if(($filesize1 > 5097152) && ($filesize2 > 5097152) && ($filesize3 > 5097152) && ($filesize4 > 5097152) && ($filesize5 > 5097152) && ($filesize6 > 5097152)){
         $errors[]='File is above 5 MB';
      }
      
      if(empty($errors)==true){
         $id=$_SESSION['ID'];
         $adm=$_SESSION['idnum'];


      	 $loc1="Documents/ApplicantsID/$filename1";
         $loc2="Documents/Slips/$filename2";
         $loc3="Documents/Slips/$filename3";
         $loc4="Documents/GuarantorsID/$filename4";
         $loc5="Documents/GuarantorsID/$filename5";
         $loc6="Documents/GuarantorsID/$filename6";

         $sql = "INSERT INTO LOAN(USERID,STATUS,AMOUNT,AMTWRD,REPPERIOD,KRAPIN,IDF,SLIP1F,SLIP2F,G1NAME,G1ID,G1PHONE,G1AMT,G1IDF,G2NAME,G2ID,G2PHONE,G2AMT,G2IDF,G3NAME,G3ID,G3PHONE,G3AMT, G3IDF,STAMP) VALUES ('$id',1,'$amt','$amtwrd','$repp','$krapin','$loc1','$loc2','$loc3','$g1name','$g1id','$g1phone','$g1amt','$loc4','$g2name','$g2id','$g2phone','$g2amt','$loc5','$g3name','$g3id','$g3phone','$g3amt','$loc6','$Timestamp')";

         
         $querry=mysqli_query($conn,$sql);
         if ($querry===TRUE) {
            # code...
           
               move_uploaded_file($filetmp1,$loc1);
               move_uploaded_file($filetmp2,$loc2);
               move_uploaded_file($filetmp3,$loc3);
               move_uploaded_file($filetmp4,$loc4);
               move_uploaded_file($filetmp5,$loc5);
               move_uploaded_file($filetmp6,$loc6);

               echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "Successful Loan Application",
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
                               window.location="/Nurses/pages/forms/loan.php";
                               });
               
                </script>';
         }
         
      }else{
         
         echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "'.print_r($errors).'",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/loan.php";
                               });
               
                </script>';
      }
   }else{

      echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "File not selected",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/loan.php";
                               });
               
                </script>';
   }
}else{
  echo '<script type="text/javascript">
                swal({
                            title: "Migori County Nurses Sacco Ltd.!",
                            text: "File not submitted",
                            icon: "error",
                            button: "Okay"}).then(function(){
                               window.location="/Nurses/pages/forms/loan.php";
                               });
               
                </script>';
	# code...
}
	
?>


</body>
</html>