<!--
Project Name: Milestone 3 Blog Post
Version 3
LoginResponse module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php 
include_once('myfuncs.php');

?>
<?php if(!empty(getUserId())): ?>
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

    </style>      

</head>

<body>
    
    <div class="sidenav">
        <a class="active" href="newpost.php">New Post</a>
        <a class="active" href="signOut.php">Sign Out</a>
    </div>

    <div class="page">
        <center><h2>Homepage</h2></center>

        <h2>Login was successful: 
            <? php 
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL); 
            echo " "  ?></h2> 

    </div>
      
<body>
    <a href="whoAmI.php">Who Am I</a> 
</html>
<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
            <?php echo " " . getUserId() ?>
        </body>
    </html>
<?php endif; ?>
