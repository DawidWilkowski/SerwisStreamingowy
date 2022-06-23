<?php
session_start();

?>


<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Rejestracja</title>
  <link rel="stylesheet" href="user.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md ">
        <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>



      </nav>

      <div class="container">

        <div class="jumbotron">
          <h1>Zarejestruj się</h1>
          <p>Utwórz darmowe konto </p> <br>

          <form class="" action="user.php" method="POST">

            <input type="email" class="form-control" placeholder="E-mail" name="mail" value="">
            <br>
            <input type="password" class="form-control" placeholder="Hasło" name="pass" value="">
            <div class="signupbutton">
              <br><br>
              <button type="submit" class="btn btn-success btn-lg" name="sub" value="submit">Zarejestruj</button>

            </div>


        </div>

      </div>


    </div>
    </form>




    </div>

    </div>


    </div>

  </header>

</body>

</html>