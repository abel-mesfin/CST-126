<?php
require_once('myfuncs.php');

//$conn = dbConnect();
// Check connection
/*if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection to SQL server failed" . "<br>";
}else{
//echo "Connected successfully" . "<br>";
}*/

function getAllUsers() {
  $conn = dbConnect();
  $sql = "SELECT ID, first_name, last_name, admini FROM users";

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


function searchTags($search) {
  $conn = dbConnect();
  $sql = "SELECT ID, Categories FROM posts";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $cat[] = $row;
     
    }
    foreach($cat as $key){
      $cat_arr = explode(" ",$key['Categories']);
       foreach($cat_arr as $tag){
        if (stripos($tag,$search)){
          if (!in_array($key["ID"], $tagPosts)) {
          $tagPosts[] = $key["ID"];
          }
        }
       };
       //print_r($key['ID']);
     }
  }else {
  echo "0 results";
  }
  return($tagPosts);
//print_r($cat[0]);


}


function checkAdmin($userID) {
  $conn = dbConnect();
  $sql = "SELECT admini FROM users WHERE ID = ".$userID;

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

function checkPublished($userID) {
  $conn = dbConnect();
  $sql = "SELECT ID FROM posts WHERE published = 0 and user_id = ".$userID;

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

function getAllPostsByID($ID) {
  $conn = dbConnect();
  $sql = "SELECT ID,user_id, Title, body, image_name,files,created_at,published,Categories FROM posts WHERE ID =".$ID;

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $posts[] = $row;
    }
  }else {
  echo "0 results";
  }
  //print_r($users);
return $posts;


}

function getAllPosts() {
  $conn = dbConnect();
  $sql = "SELECT ID,user_id, Title, body, image_name,files,created_at,published,Categories FROM posts";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $posts[] = $row;
    }
  }else {
  echo "0 results";
  }
  //print_r($users);
return $posts;


}

function getAllPublishedPosts() {
  $conn = dbConnect();
  $sql = "SELECT ID,user_id, Title, body, image_name,files,created_at,published,Categories FROM posts WHERE published = 1";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $posts[] = $row;
    }
  }else {
  echo "0 results";
  }
  //print_r($users);
return $posts;


}

function getAllUserPosts($user) {
  $conn = dbConnect();
  $sql = "SELECT ID,user_id, Title, body, image_name,files,created_at,published,Categories FROM posts WHERE user_id = ".$user;

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $posts[] = $row;
    }
  }else {
  echo "0 results";
  }
  //print_r($users);
return $posts;


}

function getOnePost($postNumber) {
  $conn = dbConnect();
  $sql = "SELECT * FROM posts where ID = ".$postNumber;

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $posts[] = $row;
    }
  }else {
  echo "0 results";
  }
  //print_r($users);
return $posts;


}

function getName($ID){
  $conn = dbConnect();
  $sql = "SELECT FIRST_NAME, LAST_NAME FROM users where ID = ".$ID;
  $result = $conn->query($sql);
  $row = mysqli_fetch_assoc($result);
  return $row;
}



//searchTags();
//$conn->close();

?>