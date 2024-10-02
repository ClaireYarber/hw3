<?php
function get_db_connection(){
  // Create Connection
  $conn= new mysqli('', '', '', '');

  //Check Connection
  if ($conn->connect_error) {
    return false;
  }
  return $conn;
}
?>
  
