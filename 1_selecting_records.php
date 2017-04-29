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

$sql = "SELECT * FROM USER";
$query = $mysqli->query($sql);

while($data = $query->fetch_assoc()){
	echo "Id: ".$data['id']."<br/>";
	echo "Name: ".$data['name']."<br/>";
	echo "E-mail: ".$data['email']."<br/><hr>";

}





?>