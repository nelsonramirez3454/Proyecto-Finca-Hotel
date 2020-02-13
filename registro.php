<!DOCTYPE html>
<html>
<head>
  <title>Proyecto</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/styleRegistro.css">

</head>
<body >
  <div class="container">
    <input type="checkbox" id="switch">
    <label for="switch">
      <b class="top"></b>
      <b class="bottom"></b>
    </label>
  <div class="login">
    <h1>Check in</h1>
    <form action="insertar.php" method="POST">
      <p>
        Name: <input required type="text" name="username"><br><br>
      </p>
      <p>
       Last Name: <input required type="text" name="username"><br><br>
      </p>
      <p>
       Document: <input required type="text" name="username"><br><br>
      </p>
      <p>
       Years: <input required type="text" name="username"><br><br>
      </p>
      <p>
        Sex: <input required type="password" name="  password"><br><br>
      </p>
      <p>
        <form action="#">
          <a href="index.php" class="btnPersonalizadoR">CheckIn</a>
        </form>
      </p>
    
    </form>
  </div>

</div>

</body>
</html>