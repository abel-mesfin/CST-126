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
<meta http-equiv="refresh" content="0; URL=http://localhost:8888/Milestone4/index.php" />


<?php else: ?>
    <html>
        <body>
            <p>Error you are not logged in</p>
            <?php echo " " . getUserId() ?>
        </body>
    </html>
<?php endif; ?>