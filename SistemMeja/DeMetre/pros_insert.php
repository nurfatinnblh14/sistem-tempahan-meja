<?php
include 'config.php';

$name=$_POST['name'];
$email=$_POST['email'];
$notel=$_POST['notel'];
$bilpel=$_POST['bilpel'];
$masa=$_POST['masa'];
$tarikh=$_POST['tarikh'];

$query="insert into data (name,email,notel,bilpel,masa,tarikh) values('$name','$email','$notel','$bilpel','$masa','$tarikh')";

if (mysqli_query($con,$query)) {

echo"Data berjaya direkod";
header('location:submited.php');
}
else{
	echo"data tidak berjaya direkod";
}
?>
