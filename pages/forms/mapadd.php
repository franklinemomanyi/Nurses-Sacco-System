
<?php
  require('../../connect.php');
?>

<?php
$name = $_GET['name'];
$address = $_GET['address'];
$lat = $_GET['lat'];
$lng = $_GET['lng'];


$sql = "INSERT INTO MARKERS (NAME,ADRESS,LAT,LNG)
  VALUES ('$name','$address','$lat','$lng')";

if ($conn->query($sql) === TRUE) {

    echo 1;
   
}else{
  echo 2;
  
}
?>
