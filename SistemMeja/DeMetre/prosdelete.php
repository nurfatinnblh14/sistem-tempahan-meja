<?php

include 'config.php';
$name=$_GET['name'];

$query="delete from data where name='$name'";

if ($result=mysqli_query($con,$query)){
	echo " BERJAYA DI PADAM";
	header('location:list.php');
}
else{
	echo "TIDAK BERJAYA";
}

?>
