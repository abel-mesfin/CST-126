<?php

function dbConnect() {
//Mysql connection info
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "activity1";

$conn = new mysqli($servername, $username, $password, $dbname);

return $conn;

}

function saveUserId($id)
{
	session_start();
	$_SESSION["USER_ID"] = $id;
}
function getUserId()
{
	session_start();
	return $_SESSION["USER_ID"];
}

function endSession(){
	session_destroy();
}

?>