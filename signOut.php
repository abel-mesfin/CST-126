<!--
Project Name: Milestone 3 Blog Post
Version 3
Signout module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php 
include('myfuncs.php');
$vari = getUserId()?>
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
   <?php   ?>
    <div class="page">
        <center><h2>You have been signed out</h2></center>

    </div>
     <a href="index.php">Homepage</a> 
     <?php if(!empty($vari) ): endSession() ?>
     <?php endif; ?>
      
<body>
   
</html>

