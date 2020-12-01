<!--
Project Name: Milestone 3 Blog Post
Version 3
postHandler.php module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->

<html>
<script>
    $("#success").click(function () {
  $(".notify").toggleClass("active");
  $("#notifyType").toggleClass("success");
  
  setTimeout(function(){
    $(".notify").removeClass("active");
    $("#notifyType").removeClass("success");
  },2000);
});

$("#failure").click(function () {
  $(".notify").addClass("active");
  $("#notifyType").addClass("failure");
  
  setTimeout(function(){
    $(".notify").removeClass("active");
    $("#notifyType").removeClass("failure");
  },2000);
});
</script>
</html>


<?php



require_once('myfuncs.php');


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
$removeImage = $_POST['remove'];
$postID = $_POST['postNumber'];
$cats = $_POST['hideCats'];
if(empty($published)){
    $published = 0;
}else{
    $published = 1;
}
$image_name = $_FILES['image']['name'];

if(empty($Title)){
  echo "A title is a required field and cannot be blank.". "<br>";
}elseif(empty($body)){
  echo "A Password is a required field and cannot be blank.". "<br>";
}elseif(strpos($body, '/') || strpos($body, '%') || strpos($body, '$')){
  echo "Unable to make post. There is a special characheter in the body". "<br>";
}elseif(is_null($image_name)){
  echo "PLEASE SELECT A POST". "<br>";
}else{
$image = addslashes($_FILES['image']['tmp_name']);
$name = addslashes($_FILES['image']['name']);
$image = file_get_contents($image);
$image = base64_encode($image);

try {
    if(!empty($image_name) || $removeImage == "on"){
    $sql = "UPDATE posts SET Title='".$Title."', body='".$body."', published='".$published."', image_name='".$name."', files='".$image."', Categories='".$cats."' WHERE ID = ".$postID;

    }else{
    $sql = "UPDATE posts SET Title='".$Title."', body='".$body."', published='".$published."', Categories='".$cats."' WHERE ID = ".$postID;

    }
    $update = 1;
    //Check for succesful record creation
if($conn->query($sql) == TRUE){
    echo "New record created succesfully". "<br>";
}
else{
    //echo "Error: " . $sql . "<br>" . $conn->error;
}
    header("Location: http://localhost:8888/Milestone4/updateSuccess.html");
}catch(Exception $e){
    $update = 0;
}
}


//header("Location: http://localhost:8888/Milestone4/settings.php?success=".$update);
//exit();




$conn->close();



?>