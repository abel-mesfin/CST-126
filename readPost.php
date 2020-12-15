<?php
require_once('utility.php');

$conn = dbConnect();


?>

<html>


<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free JavaScript library for star rating. Star Rating system">
    <meta name="keywords" content="HTML, CSS, JavaScript, library, free">
    <meta name="author" content="Djordje Vujicic">

    <meta property="og:image" content="https://starratingjs.netlify.app/src_img.png" />
    <meta property="og:image:secure_url" content="https://starratingjs.netlify.app/src_img.png" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="476" />
    <meta property="og:image:height" content="286" />
    <meta property="og:image:alt" content="Star rating" />
    <meta property="og:url" content="https://starratingjs.netlify.app">

    <link rel="icon" href="favicon.png" type="image/png" sizes="16x16">
    <link rel="image_src" href="src_img.png">
    <title>Free Javascript Star Rating System</title>
    <script src="index.js"></script>


    
    

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
            margin-bottom:10%;
        }

        /* Right column */
        .rightcolumn {
            float: right;
            width: 25%;
            margin-bottom:10%;
            
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
           margin-bottom:50px; 
        }

        .comm{
           margin-top:20%; 
           
        }

        .comm1{
           margin-top:0px; 
           font-weight: bold;
           
        }

        .commentSubmit{
           margin-left:5px; 
           
        }

        .commentInput{
           margin-top:5%; 
           width:70%;
           
        }

        .commentDiv{
            display:inline-block;
            
        }

        .commentDivName{
            display:inline-block;
            margin-right:5px;
            font-weight: bold;
            
            
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
            $postIDG = base64_decode($_GET['ID']);
            $post = getOnePost($postIDG);
            $name = getName($post[0]['user_id']);
            $full_name = $name['FIRST_NAME'].' '.$name['LAST_NAME'];
            $tim = strtotime($post[0]['created_at']);
            $dat = date('l jS \of F Y h:i:s A', $tim);
            $postComment = searchComments($postIDG);
            $currentUserG = base64_decode($_GET['user']);
            $rating = getRate($postIDG,$currentUserG)[rate];
            
            
            echo '<div class="rightcolumn">';
            echo '<div class="tags"> <p>'.$post[0]['Categories'].'</p> </div></div>';
            echo ' <div class="row"> <div class="leftcolumn"> ';
            
            echo '<div class="title"> <h1>'.$post[0]['Title'].'</h1> </div>';
            echo '<div class="name"> <h5>'.$full_name.'</h5> </div>';
            echo '<div class="time"> <h5>'.$dat.'</h5> </div>';

            #if Has pic
            if(!empty($post[0]['image_name'])){ 
                echo '<img class="fakeimg" height="150" width="500" src="data:image;base64,'.$post[0]['files'].'"';
            }    
            
            echo '<div class="bio"> <p>'.$post[0]['body'].'</p> </div>';
            
            echo '<div class="leftcolumn">';
            echo '<div><div class="starRatingContainer"><div class="ratingSystem"></div></div> 
                <form method="post">
                    <input type="hidden" name="rateNum" id="txtF">
                    <input class="rateSubmit" value="Rate" type="submit" name="rateSubmit">

                </form>
            </div>
            <br>';
            
            
            echo '<p class="comm1"> Comments</p>';
            foreach($postComment as $pc){
                echo "<div class='commentDivName'>";
                echo getName($pc[user])[FIRST_NAME].': ';
                echo " ";
                echo "</div>";
                echo "<div class='commentDiv'>";
                echo $pc[comment];
                echo "</div>";

                echo '<br>';

                echo '<br> <br>';
            }
            echo '
            <form method="post">';
            echo '<input class="commentInput" type="text" name="commentInput">';
            echo '<input class="commentSubmit" value="Post" type="submit" name="commentSubmit">';

            echo '</div></div> </div>' ;
            echo '</form>';
            
            
            if(isset($_POST['commentSubmit']))
            {
                $comInput = $_POST['commentInput'];
                echo getUserId();
                $postID = base64_decode($_GET['ID']);
                $currentUser = base64_decode($_GET['user']);
                $sql = "INSERT INTO `comments` (`comment`, `user`, `post_id` ) 
                VALUES ('$comInput', '$currentUser', '$postID')";
                if($conn->query($sql) == TRUE){
                 //echo "New record created succesfully". "<br>";
                 //header("Location: http://localhost:8888/Milestone4/updateSuccess.html");
                }else{
                    echo "<script>";
                    echo "alert('Error could not make post')";
                    echo"</script>";
                     echo "Error: " . $sql . "<br>" . $conn->error;
                }
                //alert('hi');
                
                echo "<meta http-equiv='refresh' content='0'>";
            }

            if(isset($_POST['rateSubmit']))
            {
                
                $comInput = $_POST['commentInput'];
                $rate = $_POST['rateNum'];
                $postID = base64_decode($_GET['ID']);
                $currentUser = base64_decode($_GET['user']);
                echo $rating;
                if(isset($rating)){
                    $sql = "UPDATE ratings SET rate =$rate where post = $postID and user = $currentUser" ;
                }else{
                    $sql = "INSERT INTO `ratings` (`rate`, `user`, `post` ) 
                VALUES ('$rate', '$currentUser', '$postID')";
                }
                if($conn->query($sql) == TRUE){
                 //echo "New record created succesfully". "<br>";
                }else{
                    echo "<script>";
                    echo "alert('Error could not make post')";
                    echo"</script>";
                     echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                
                echo "<meta http-equiv='refresh' content='0'>";
            }
            
        
            if(empty($rating)){
                $rating = 0;
            }
        ?>
        

    </div>
    

    <script>
        var properties1=[
            {"rating":<?php echo $rating?>, "maxRating":"5", "minRating":"0", "readOnly":"no", "starImage":"star.png", "emptyStarImage":"starbackground.png", "starSize":"26", "step":"0.5"},
            {"rating":"2.7", "maxRating":"5", "readOnly":"yes", "starImage":"star.png", "emptyStarImage":"starbackground.png", "starSize":"32"}
        ];

        var className="ratingSystem";

        rateSystem(className, properties1, function(rating){ document.getElementById("txtF").value = rating; });

    </script>
      
</body>
</html>
