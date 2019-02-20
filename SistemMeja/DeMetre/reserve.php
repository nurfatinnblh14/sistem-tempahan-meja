<html>
  <head>

    <title>De'Metre Restaurant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reserve.css">

  </head>
    <body><center>

      <div id="header">
      </div>

        <img id="logo" src="img/demetre.png">

        <a id="backbtn" href="homepage.php">
          <div>
            <p>< Back</p>
          </div>
        </a>
<br><br>
      <section id="upperform">

      <form action="pros_insert.php" method="POST">

        <p>Number of people :</p>
        <select name="bilpel">
            <option value="1-2">1-2</option>
            <option value="3-5">3-5</option>
            <option value="6-10">6-10</option>
            <option value="11-20">11-20</option>
            <option value="21-50">21-50</option>
        </select><br>

        <label>
            <p>Pick your date and time :</p>
            <input type="date" name="tarikh">
            <input type="time" name="masa">
        </label>
<br><br><br><br>
        <div id="line">
        </div>

      </section>
<br>
      <section id="contactinfo">

        <p>Full name :</p>
        <input type="name" name="name">
        <br>

        <p>Email :</p>
        <input type="email" name="email">
        <br>

        <p>Phone Number :</p>
        <input type="text=" name="notel" number min="10" max="11">
        <br>

        <input id="submitbtn" type="submit" name="submit" value="Submit">

      </form>

      </section>

    </center></body>
</html>
