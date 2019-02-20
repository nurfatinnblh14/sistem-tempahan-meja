<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>De'Metre Restaurant</title>
    <link rel="stylesheet" href="css/list.css">
  </head>
  <body><center>
    <div id="header">
    </div>
    <a id="logoutbtn" href="logout.php">
      <div>
        <p>Log Out</p>
      </div>
    </a>
      <img id="logo" src="img/demetre.png">

    <section>

    <?php
    	include 'config.php';

    	$query="select name, email, notel, bilpel, masa, tarikh from data";
    	$result=mysqli_query($con,$query);
    ?>
    <table border="solid 1px black">
    	<h1>A list of table reservers.</h1>
    	<td><p>Name</p></td>
    	<td><p>Email</p></td>
    	<td><p>Phone Number</p></td>
    	<td><p>Number Of People</p></td>
    	<td><p>Time</p></td>
    	<td><p>Date</p></td>
      <td><p>Clear</p></td>

    <?php
    	while($data=mysqli_fetch_array($result)){
    		$name=$data["name"];
    	echo "<tr>";
    	echo "<td>".$data["name"]."</td>";
    	echo "<td>".$data["email"]."</td>";
    	echo "<td>".$data["notel"]."</td>";
    	echo "<td>".$data["bilpel"]."</td>";
      echo "<td>".$data["masa"]."</td>";
      echo "<td>".$data["tarikh"]."</td>";
    	echo "<td>","<a href=\"prosdelete.php?name=$name\"> Delete </a>";
    	echo "</tr>";
    	}
    	echo "</table>";
    ?>

    </section>

  </center></body>
</html>
