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
            overflow: visible;
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
            margin-left:12%;
            padding:1px 16px;
           
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
            margin-right: 10px;
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

        input[name="remove"] {
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
           <div class="dropdown">
                <button class="dropbtn">
                <i class="fas fa-cogs fa-lg"></i>
                </button>
                <div class="dropdown-content">
                <a href="drafts.php">Drafts</a>
                <a href="#">Account</a>
                <a href="settings.php">Settings</a>
                </div>
            </div> 

            <a class="active" href="signOut.php">
               <i class="fas fa-sign-out-alt"></i>
           </a>
        </div>

        

        <div class="navTitle">
            <h3> Edit page </h3>
        </div>
        
    </div>

    <div class="page">
    <?php
        $post_ID = $_GET['ID'];
        $post = getOnePost($post_ID);
        function getPostID(){
            return $post_ID;
        }
        if($post[0]['published'] == 1){
            $checked = "checked";
        } else{
            $checked = " ";
        }
        

        if($post[0]['image_name'] == ""){
            $imageName = "No file currently on display";
        } else{
            $imageName = $post[0]['image_name'];
        }


       echo '<form action="./handlers/editForm.php" method="POST" enctype="multipart/form-data" action="">';

        echo '<input  type="hidden" name="postNumber" value="'.$post_ID.'"> ';
        echo    'Title: <input type="text" value="'.$post[0]['Title'].'" name="title" size=56 style="height:30;"> <br>';
        echo    '<label class="bodLabel" for="textArea" >Body:</label>';
        echo    '<textarea name="textArea" >'.$post[0]['body'].'</textarea><br>';
        echo    '
            Tags: <input type="text" id="categories" name="categories" placeholder="No more than 3" size=56 style="height:30;"> 
            <button onclick="cler()" type="button"><b>Add </b></button><button onclick="remove()" type="button"><b>Remove </b></button> <label class="catLabel"id="catsLabel" name="omg">'.$post[0]['Categories'].'</label><br>
            <input type="hidden" name="hideCats" id="hideCats" value="'.$post[0]['Categories'].'">';
        echo    '<label class="fileLabel">'.$imageName.'</label>';
        if($imageName != "No file currently on display"){
        echo    'Check to remove image <input type="checkbox" name="remove" ><br>';
        }
        echo    '<input type="file" class="custom-file-input" name="image" ><br>';
        echo    'Published: <input type="checkbox" name="published" '.$checked.'><br>';
        echo    '<input type="submit" value="Update" name="post">';
        
       echo '</form>';
        

    ?>
<button onclick="myFunction()">Try it</button>

    </div>


      
<body>
    
</html>
<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
        </body>
    </html>
<?php endif; ?>