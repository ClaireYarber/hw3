<?php
function get_db_connection(){
  $conn = new mysqli('138.197.17.168', 'misclair_hw3user', 'Y41727jms!', 'misclair_hw3');

  // Check Connection
  if ($conn->connect_error) {
    throw new Exception('Connection failed: ' . $conn->connect_error);
  }

  return $conn;
}
?>
