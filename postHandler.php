<?php
include('myfuncs.php');

$conn = dbConnect();


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection to SQL server failed" . "<br>";
}else{
//echo "Connected successfully" . "<br>";
}


//Variables from form
$Title = $_POST['title'];
$body = $_POST['textArea'];
$vari = getUserId();
$published = $_POST['published'];
if(empty($published)){
    $published = 0;
}else{
    $published = 1;
}

if(empty($Title)){
  echo "A title is a required field and cannot be blank.". "<br>";
}elseif(empty($body)){
  echo "A Password is a required field and cannot be blank.". "<br>";
}elseif(strpos($body, '/') || strpos($body, '%') || strpos($body, '$')){
  echo "Unable to make post. There is a special characheter in the body". "<br>";
}else{
$sql = "INSERT INTO `posts` (`id`, `user_id`, `Title`, `body`, `published`) 
VALUES (NULL, '$vari', '$Title', '$body', '$published')";

}

//Check for succesful record creation
if($conn->query($sql) == TRUE){
    echo "New record created succesfully". "<br>";
}
//else{
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

$conn->close();



?>