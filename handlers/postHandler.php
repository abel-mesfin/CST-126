<!--
Project Name: Milestone 3 Blog Post
Version 3
postHandler.php module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php



include('../myfuncs.php');

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
$image = $_POST['image'];
$cats = $_POST['hideCats'];
$categories = explode(" ", $cats);
if(empty($published)){
    $published = 0;
}else{
    $published = 1;
}
$image_name = $_FILES['image']['name'];

if(empty($Title)){
  echo "A title is a required field and cannot be blank.". "<br>";
}elseif(empty($body)){
  echo "A body is a required field and cannot be blank.". "<br>";
}elseif(strpos($body, '/') || strpos($body, '%') || strpos($body, '$')){
  echo "Unable to make post. There is a special characheter in the body". "<br>";
}elseif(is_null($image_name)){
  echo "PLEASE SELECT A POST". "<br>";
}else{
$image = addslashes($_FILES['image']['tmp_name']);
$name = addslashes($_FILES['image']['name']);
$image = file_get_contents($image);
$image = base64_encode($image);
print_r($categories);

$sql = "INSERT INTO `posts` (`id`, `user_id`, `Title`, `body`, `published`,`image_name`, `files`, `Categories` ) 
VALUES (NULL, '$vari', '$Title', '$body', '$published','$name', '$image', '$cats')";

}

//Check for succesful record creation
if($conn->query($sql) == TRUE){
    echo "New record created succesfully". "<br>";
    header("Location: http://localhost:8888/Milestone8/updateSuccess.html");
}
else{
  echo "<script>";
    echo "alert('Error could not make post')";
    echo"</script>";
    //echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>