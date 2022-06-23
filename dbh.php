<?php
$conn = mysqli_connect("", "", "", "");
if (!$conn) {
   die('Could not connect: ' . mysqli_error());
}
