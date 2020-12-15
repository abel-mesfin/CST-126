<!--
Project Name: Milestone 3 Blog Post
Version 3
newPost module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php 
require_once('myfuncs.php');
require_once('utility.php');
$vari = getUserId()?>
<?php if(!empty($vari) ): ?>
<html>
<head>
<script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
    <script> 
   

    function cler(){
    var cats = document.getElementById('categories').value 
        
    if(cats != ''){
    if(document.getElementById('hideCats').value  != ''){
        window.end = ' #'+ cats
    }else{
        window.end = '#'+cats
    }
    
    
    window.leng = end.length
    //alert(document.getElementbyID('catsLabel')innerHTML)
    document.getElementById('catsLabel').innerHTML = document.getElementById('catsLabel').innerHTML + window.end
    document.getElementById('hideCats').value = document.getElementById('catsLabel').innerHTML
    document.getElementById('categories').value = ''
    }  
    

    }
    function remove(){
        var lengthStr = document.getElementById('catsLabel').innerHTML.length
        var yo = window.end
        var total = document.getElementById('catsLabel').innerHTML
        var first = total.lastIndexOf("#") -1
        var number_ofchar = lengthStr-first
        var test = total.substring(0,lengthStr - number_ofchar)
        document.getElementById('catsLabel').innerHTML = test
        document.getElementById('hideCats').value = test
        
    }
    </script>

          


    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(25, 168, 187);
        }
    
        .topnav {
            overflow: auto;
            background-color: #333;
            position: fixed;
            margin-right:0;
            width:100%;
            top:0;
            margin-bottom:30px;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            
        }

        .topnav .btnright{
            float:right;
            margin-right:30;
            background-color: #333;
        }

        .topnav .navTitle{
            
            color:white;
            margin-left:46%;
        }
    
        .topnav a.active {
            background-color: #333;
            color: white;
        }
    
        .Header {
            text-align: center;
        }

        .page{
            
            padding:1px 16px;
            margin-top:100px;
           
        }

        textarea {
            vertical-align: top;
            height:300px;
            width: 400px;
            resize:none;
            display: inline-block;
            margin-top:20px
 }
        .bodLabel{
            margin-top:150px;
            display:inline-block;
        }

        .catLabel {
           
            display:inline-block;
            width:20%;
        }

        .fileLabel{
            display:inline-block;
            margin-left: 50px;
        }

        form {
            margin-left: 25%;
            margin-top: 10%;
        }
        input[name="post"] {
            margin-left: 25%;

        }
        input[name="published"] {
            margin-top: 10px;

        }
        input[name="image"] {
            margin-top:10px;
            margin-left: 50px;
            

        }

        input[name="categories"] {
            margin-top:20px;
            width:20%;

        }

        .dropdown {
        float: left;
        overflow: hidden;
        }

        .dropdown .dropbtn {
        font-size: 16px;  
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
        background-color: red;
        }

        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
        }

        .dropdown-content a:hover {
        background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
        display: block;
        }

         .custom-file-input::-webkit-file-upload-button {
        visibility: hidden;
        color: transparent;
        display:none;
        }
        .custom-file-input::before {
        content: 'Change';
        display: inline-block;
        background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
        border: 1px solid #999;
        border-radius: 3px;
        padding: 5px 8px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        text-shadow: 1px 1px #fff;
        font-weight: 700;
        font-size: 10pt;
        }

        

    </style>      

</head>

<body>



<div class="notify"><span id="notifyType" class=""></span></div>
    
    <div class="topnav">
        <a class="active" href="loginResponse.php">
            <i class="fas fa-home fa-lg"></i>
        </a>
        
          

        <div class="btnright">
           <a class="active" href="signOut.php">
               <i class="fas fa-sign-out-alt"></i>
           </a>
        </div>

        <div class="navTitle">
            <h3> Edit page </h3>
        </div>
        
    </div>

    <div class="page">
    
        <center>
            <h1> Deletion succesful</h1>
                <div class="home">
                    <a href="Users.php"><button>Back to Users</button></a>
                </div>
        </center>

    </div>

    
      
<body>
    
</html>
<?php

require_once('myfuncs.php');

$user_id = $_GET['ID'];

$conn = dbConnect();


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connection to SQL server failed" . "<br>";
}else{
//echo "Connected successfully" . "<br>";
}


try {
    $sql = "DELETE FROM users WHERE ID = ".$user_id;
    //$sql = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'activity1' AND   TABLE_NAME   = 'posts'; ";
    
}catch(Exception $e){
    alert("Error can not delete user");
}
$result = $conn->query($sql);


//Check for succesful record creation
if( $result == TRUE){
    $row = mysqli_fetch_assoc($result);
}
else{
//   echo "Error: " . $sql . "<br>" . $conn->error;
}


try {
    $sql = "SELECT `AUTO_INCREMENT` FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'activity1' AND   TABLE_NAME   = 'users'; ";
    
}catch(Exception $e){
    alert("Error can not delete increment");
}
$result = $conn->query($sql);
if( $result == TRUE){
$row = mysqli_fetch_assoc($result);
$inc = $row['AUTO_INCREMENT'] -1;
}else{
//    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "ALTER TABLE users AUTO_INCREMENT = ".$inc;
$result = $conn->query($sql);
if( $result == TRUE){
}else{
//    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

?>
<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
        </body>
    </html>
<?php endif; ?>