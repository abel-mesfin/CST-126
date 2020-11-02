<!--
Project Name: Milestone 3 Blog Post
Version 3
newPost module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php 
include('myfuncs.php');
$vari = getUserId()?>
<?php if(!empty($vari) ): ?>
<html>
<head>
<script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>
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
    <


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
            margin-left:12%;
            padding:1px 16px;
            height:2000;
           
        }

        textarea {
            vertical-align: top;
            height:300px;
            width: 400px;
            resize:none;
            display: inline-block;
            margin-top:20px;
            margin-left:-125px;

 }
        .mainLabel {
            margin-top:150px;
            display:inline-block;
            width:20%;
        }

        .catLabel {
           
            display:inline-block;
            width:20%;
        }

        form {
            margin-left: 25%;
            margin-top: 10%;
        }
        input[name="post"] {
            margin-top:30px;
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

    </style>      

</head>

<body>
    
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
            <h3> New post page </h3>
        </div>
        
    </div>

    <header>
        

    </header>
    <div class="page">
        

        <form action="postHandler.php" method="POST" enctype="multipart/form-data" action="">


            Title: <input type="text" name="title" size=56 style="height:30;"> <br>
            <label for="textArea" class="mainLabel">Body:</label>
            <textarea name="textArea" ></textarea><br>
            Tags: <input type="text" id="categories" name="categories" placeholder="No more than 3" size=56 style="height:30;"> 
            <button onclick="cler()" type="button"><b>Add </b></button><button onclick="remove()" type="button"><b>Remove </b></button> <label class="catLabel"id='catsLabel' name='omg'></label><br>
            <input type="hidden" name="hideCats" id="hideCats" >
            Image: <input type="file" name="image"><br>
            Published: <input type="checkbox" name="published"><br> 
            <input type="submit" value="Post" name="post">
        
        </form>
        


    

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