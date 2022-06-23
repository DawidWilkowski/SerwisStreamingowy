<?php
session_start();

?>


<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>NeonFlix-Admin</title>
  <link rel="stylesheet" href="user.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
        <span class="navbar-text">NeonFlix</span>

        <ul class="navbar-nav">
          <li class="nav-item"> <a href="homepage.php" class="nav-link"> Strona główna </a> </li>
          <li class="nav-item"> <a href="logout.php" class="nav-link"> Wyloguj</a> </li>

        </ul>

      </nav>

      <div class="container">

        <div class="jumbotron">
          <h1> Formularz dodawania filmu</h1>
          <p> <b></b> </p> <br>

          <form class="" action="admin-control.php" method="POST" enctype="multipart/form-data">

            <input type="text" class="form-control" placeholder="Nazwa" name="mname" value=""><br>
            <input type="text" class="form-control" placeholder="Rok wydania" name="release" value="">
            <br>
            <input type="text" class="form-control" placeholder="Gatunek" name="genre" value="">
            <br>
            <input type="number" class="form-control" placeholder="Długość" name="rtime" value="">
            <br>
            <input type="text" class="form-control" placeholder="Opis" name="desc" value="">
            <br>
            <div class="row">
              <div class="col">
                <table>
                  <tr>
                    <td> <label for=""><b>Okładka : </b></label> </td>
                    <td>
                      <div class="">
                        <input type="hidden" name="size" value="100000">

                        <input type="file" name="image" value="">
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <div class="col">
                <table>
                  <tr>
                    <td> <label for=""><b>Film : </b></label> </td>
                    <td>
                      <div class="">
                        <input type="hidden" name="size" value="30000000">

                        <input type="file" name="video" value="">
                      </div>
                    </td>
                  </tr>
                </table>

              </div>
            </div> <br><br>
            <div class="signupbutton">
              <input type="submit" class="btn btn-success btn-lg" name="upload" value="Dodaj">
            </div>


          </form>

        </div>


      </div>

    </div>


    </div>

  </header>

</body>

</html>