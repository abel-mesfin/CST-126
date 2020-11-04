<html>
<head>
<style>
table, th{
  border: 1px solid black;
}
</style>
</head>

<body>
<table>

<tr> 
<th>ID</th>
<th>First Name</th>
<th>Last Name</th> 

</tr>



<?php
require_once('utility.php');
$users = getAllUsers();


for($x=0;$x < count($users);$x++){
    echo "<tr>";
        echo "<td>" . $users[$x]['ID'] . "</td>";  
        echo "<td>" .  $users[$x]['first_name'] . "</td>";
        echo "<td>" . $users[$x]['last_name'] . "</td>";
    echo "</tr>";
    
} 
?>

</table>
<body>
</html>
