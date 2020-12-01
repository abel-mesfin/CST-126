<?php
require_once('utility.php');




?>

<html>
 <script src="https://kit.fontawesome.com/27a3960bc7.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
         box-sizing: border-box;
        }
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
            margin-left:18%;
            padding: 16px;
            height:1000px;
            margin-top:70px;
        }

        /* Left column */
        .leftcolumn {   
            float: left;
            width: 75%;
        }

        /* Right column */
        .rightcolumn {
            float: left;
            width: 25%;
            padding-left: 20px;
        }

        .posts{
            background-color: white;
            padding: 20px;
            margin-top: 20px;
            width:80%;

        }

        .posts .biosec{
            float:left;
                
        }

        .posts .readMore{
            
            float:right;
            margin-left:;
            
        }

        .defaultimg {
            background-color: #aaa;
            width: 30%;
            padding: 20px;
            float:left;
            margin-left:-10px;
            margin-top:-10px;
            margin-right:25px;
        }

        .fakeimg {
            width: 100%;
            height: 50%;
            padding: 10px;
            margin-right:25px;
            margin-left:-20px;
            margin-top:-20px;
            }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .title {
            
            
        }

        .date{

        }

        .name{

        }

        .bio{
            
        }
        .tags{
           margin-top:50px; 
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

        .topnav a:hover, .dropdown:hover .dropbtn {
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

        @media screen and (max-width: 800px) {
            .leftcolumn, .rightcolumn {   
                width: 100%;
                padding: 0;
            }
        }


    </style>      

</head>

<body>
    <div class="topnav">
        <a class="active" href="newpost.php">
            <i class="fas fa-plus fa-lg"></i> New
        </a>
        <a class="active" href="index.php">
        <i class="fas fa-home fa-lg"></i>
        </a>
          

        <div class="btnright">

            <div class="dropdown">
                <button class="dropbtn">
                <i class="fas fa-cogs fa-lg"></i>
                </button>
                <div class="dropdown-content">
                <a href="drafts.php">Drafts</a>
                <a href="#">Link 2</a>
                <a href="settings.php">Settings</a>
                </div>
            </div> 
            <a class="active" href="signOut.php">
            <i class="fas fa-sign-out-alt"></i>
            </a> 
        </div>

        <div class="navTitle">
            <h3> Abels Blog </h3>
        </div>
        
    </div>

    <div class="page">
       
        <?php
            $post = getOnePost($_GET['ID']);
            $name = getName($post[0]['user_id']);
            $full_name = $name['FIRST_NAME'].' '.$name['LAST_NAME'];
            $tim = strtotime($post[0]['created_at']);
            $dat = date('l jS \of F Y h:i:s A', $tim);
            //print_r($post[0]['files']);
            echo ' <div class="row"> <div class="leftcolumn"> ';
            echo '<div class="title"> <h1>'.$post[0]['Title'].'</h1> </div>';
            echo '<div class="name"> <h5>'.$full_name.'</h5> </div>';
            echo '<div class="time"> <h5>'.$dat.'</h5> </div>';
            if(!empty($post[0]['image_name'])): 
            echo '<img class="fakeimg" height="150" width="500" src="data:image;base64,'.$post[0]['files'].'"';
            echo '<div class="bio"> <p>'.$post[0]['body'].'</p> </div>';
            echo '<div class="tags"> <p>'.$post[0]['Categories'].'</p> </div>';
            echo '</div></div> ' ;
            else:
            echo '<div class="bio"> <p>'.$post[0]['body'].'</p> </div>';
            echo '<div class="tags"> <p>'.$post[0]['Categories'].'</p> </div>';
            echo '</div></div> ' ;
            endif;
        

        ?>
        

    </div>
      
</body>
</html>
<!--
    $post = getOnePost($_GET['ID']);
        print_r($post);

    -->