<?php
  $servername = 'Edited For Github';
  $username = 'Edited For Github';
  $password = 'Edited For Github';
  $dbname = 'Edited For Github';

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?> 
