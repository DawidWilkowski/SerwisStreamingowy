<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>NeonFlix-Homepage</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <header>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a href="#" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
      <span class="navbar-text">NeonFlix</span>

      <ul class="navbar-nav">
        <?php

        if (isset($_SESSION['user'])) {
          if ($_SESSION['user'] == 'admin@admin') {

            echo "<li class='nav-item'> <a href='admin.php' class='nav-link'>Dodaj film</a> </li>";
          }
        }
        echo "

                  <li class='nav-item'> <a href='logout.php' class='nav-link'>Wyloguj</a> </li>
                  </ul>
                  </nav>
                  <div class='container-fluid'>
                  <br><br><br>";
        include 'dbh.php';
        $id = $_SESSION['id'];
        $quer = "SELECT * FROM user1 WHERE id = '$id' ";
        $quer2 = "SELECT * FROM movies WHERE mid in (SELECT mid from user1 where id = '$id') ";
        $check = mysqli_query($conn, $quer);
        $rel = mysqli_fetch_assoc($check);
        $check2 = mysqli_query($conn, $quer2);
        $rel2 = mysqli_fetch_assoc($check2);

        echo " </i></b>
                  </div>
                  </header>
            


                </div>";
        ?>

        <div class="jumbotron">
          <h2> Wszystkie filmy</h2>
          <?php
          include 'fetcher.php';
          ?>


        </div>

        </section>

</body>

</html>