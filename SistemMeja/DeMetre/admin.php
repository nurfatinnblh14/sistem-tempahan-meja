<html>
    <head>
      <title>De'Metre Restaurant</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="css/admin.css">
    </head>
    <body>

      <center>

      <div id="header">
      </div>

        <img id="logo" src="img/demetre.png">

      <section id="stuff">

        <img src="img/admin.png"><br><br><br>
        <form action="loginADMIN.php" method="POST">
          <label for="email">Email</label>
          <br>
          <input type="text" id="email" name="email">
          <br>
          <label for="password">Password</label>
          <br>
          <input type="password" id="password" name="password">

        <div class="login">
          <br><br>
          <input id="login" type="submit" name="submit" value="Log In">
        </div>
        </form>
      </section>

      <a id="backbtn" href="homepage.php">
        <div>
          <p>< Back</p>
        </div>
      </a>

    </center>
    </body>
</html>
