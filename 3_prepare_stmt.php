<?php 

$server = "localhost";
$user 	= "root";
$pass	= "root";
$database = "test";

// Conect Mysql
@$mysqli = new mysqli($server,$user,$pass,$database);

// Error

if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL:(".$mysqli->connect_errno.") ".$mysqli->connect_error;
	exit;
}


$stmt = $mysqli->stmt_init();
$stmt->prepare("SELECT name,email FROM USER WHERE id = ? and name = ?");
$stmt->bind_param("is", $_GET["id"],$_GET["name"]);
$stmt->execute();
$stmt->bind_result($name,$email);
$stmt->fetch();

echo "name: ".$name."<br/>";
echo "e-mail: ".$email."<br/>";







?>