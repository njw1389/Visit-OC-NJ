<?php
  $servername = 'localhost';
  $username = 'nola_njw1389';
  $password = 'Ombees#1';
  $dbname = 'nola_njw1389';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?> 