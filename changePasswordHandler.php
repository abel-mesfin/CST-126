<?php


require_once('myfuncs.php');
require_once('utility.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$conn = dbConnect();


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection to SQL server failed" . "<br>";
}else{
//echo "Connected successfully" . "<br>";
}


//Variables from form
$vari = getUserId();
$pwd = $_POST['password'];
$confirm = $_POST['confirm'];
$ID = $_POST['userID'];

if(empty($pwd)){
  echo "The First Name is a required field and cannot be blank.". "<br>";
}elseif(empty($confirm) ){
  echo "Please go back and fill out the confirm field". "<br>";
}elseif($pwd != $confirm){
  echo "Passwords do not match". "<br>";
}else{
$sql = "UPDATE users SET PASSWORD='".$pwd."' WHERE ID = ".$ID;

}

//Check for succesful record update
if($conn->query($sql) == TRUE){
    include('changePwdSuccess.html');
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>