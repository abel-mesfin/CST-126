<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once('myfuncs.php');
$conn = dbConnect();
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection to SQL server failed" . "<br>";
}else{
//echo "Connected successfully" . "<br>";
}

function getAllUsers() {
  $conn = dbConnect();
  $sql = "SELECT ID, first_name, last_name FROM users";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $users[] = $row;
    }
  }else {
  echo "0 results";
  }
  //print_r($users);
return $users;


}



getAllUsers();
$conn->close();

?>