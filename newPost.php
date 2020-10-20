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

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(25, 168, 187);
        }
    
        .sidenav {
              list-style-type: none;
                margin: 0;
                padding: 0;
                width: 12%;
                background-color: rgb(25, 158, 184);
                position: fixed;
                height: 100%;
                overflow: auto;
        }
    
        .sidenav a {
              display: block;
              color: #000;
              padding: 8px 16px;
              text-decoration: none;
        }
    
        .sidenav a.active {
            background-color: rgb(12, 99, 110);
            color: white;
        }
    
        .Header {
            text-align: center;
        }

        .page{
            margin-left:12%;
            padding:1px 16px;
            height:1000px;
        }

        textarea {
            vertical-align: top;
            height:300px;
            width: 400px;
            resize:none;
            display: inline-block;
            margin-top:20px
 }
        label {
            margin-top:150px;
            display:inline-block;
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

    </style>      

</head>

<body>
    
    <div class="sidenav">
        <a class="active" href="loginResponse.php">Home</a>
        <a class="active" href="signOut.php">Sign Out</a>
    </div>

    <header>
        <center><h2>New post page</h2></center>

    </header>
    <div class="page">
        

        <form action="postHandler.php" method="POST" action="">


            Title: <input type="text" name="title" size=56 style="height:30;"> <br>
            <label for="textArea" >Body:</label>
            <textarea name="textArea" ></textarea><br>
            Published: <input type="checkbox" name="published"><br>
            <input type="submit" value="Post" name="post">
        
        </form>
        

    

    </div>
      
<body>
    <a href="whoAmI.php">Who Am I</a> 
</html>
<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
        </body>
    </html>
<?php endif; ?>