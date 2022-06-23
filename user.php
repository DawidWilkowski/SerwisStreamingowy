

<?php
session_start();
include 'dbh.php';



$username =  $_POST['mail'];
$password =  $_POST['pass'];



$sql = "INSERT INTO user1(username, passwd)
    values('$username','$password')";
$result = $conn->query($sql);

header("Location: user-login.php");
?>
