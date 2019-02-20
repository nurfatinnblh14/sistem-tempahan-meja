<?php
$error='';
include 'config.php';
if (isset($_POST['submit'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];

  $query=mysqli_query($con,"SELECT*FROM listadmin WHERE email='".$email."' AND password='".$password."' ");

  if (mysqli_num_rows($query) == 0 ) {
    $error = "Your Email or Password is invalid.";

  }else {

    session_start();
    $row=mysqli_fetch_array($query);

      $_SESSION['email']=$row['email'];
      $_SESSION['password']=$row['password'];

      if ($row="Admin") {
        header("location: list.php");
        }
      else {
        $error="Your Email or Password is Invalid";
      }
    }
  }

?>
