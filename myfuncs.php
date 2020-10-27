<!--
Project Name: Milestone 3 Blog Post
Version 3
myfuncs.php module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function dbConnect() {
//Mysql connection info
$servername = "abelsblogdb.database.windows.net";
$connectionOptions = array(
"Database" => "activity1",
"Uid" => "abelmesfin",
"PWD" => "Leba7500"
);

$conn =  sqlsrv_connect($servername, $connectionOptions);

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
