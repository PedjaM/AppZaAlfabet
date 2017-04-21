<?php

      $mysqli_server = "localhost";
  $mysqli_user = "root";
  $mysqli_password = "";
  $mysqli_db = "projekat";

  $mysqli = new mysqli($mysqli_server, $mysqli_user, $mysqli_password, $mysqli_db);

    if ($mysqli->connect_errno) {
      die("Greška: " .  $mysqli->connect_error);
    exit();
                                }

    $mysqli->set_charset("utf8");


?>