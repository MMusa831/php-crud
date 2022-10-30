<?php

  $host = "localhost";
  $username = "root";
  $password = "Soudan11@";
  $dbname = "php-crud";

  $conn = mysqli_connect($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die('Connection failed ' . $connect_error);
}

//   echo "Connect successfully";