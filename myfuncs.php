<!--
Project Name: Milestone 3 Blog Post
Version 3
myfuncs.php module version 1
Abel Mesfin 
10/20/2020
The modules purpose is to create a html form that shows the user the required fields for regiseration
-->
<?php

function dbConnect() {
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:abelsblogdb.database.windows.net,1433; Database = activity1", "abelmesfin", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "abelmesfin", "pwd" => "Leba7500", "Database" => "activity1", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:abelsblogdb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

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
