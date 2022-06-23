<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NeonFlix</title>
  <link rel="stylesheet" href="master.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md  ">
        <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
        <span class="navbar-text"></span>
      </nav>

      <div class="container">
        <div class="jumbotron">
          <h1>Setki filmów na żądanie, <br> Zarejestruj się już teraz </h1> <br>
          <a href="register.php" type="button" class="btn btn-danger btn-block">Zarejestruj się</a>
          <h1>Lub zaloguj </h1> <br>
          <a href="user-login.php" type="button" class="btn btn-success btn-block">Zaloguj się</a>
        </div>
      </div>
    </div>

  </header>





</body>

</html>