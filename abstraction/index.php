<?php

require_once("User.php");
require_once("ServiceUser.php");

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

$user = new User();

$user->setId("16")
	->setName("Olivia")
	->setEmail("olivia@email.com");


$serviceUser = new ServiceUser($mysqli,$user);

//echo $serviceUser->insert();
//echo "Ret: ". $serviceUser->update()."<br/>";
//echo "Ret: ". $serviceUser->delete(17)."<br/>";

//$ret = $serviceUser->find(8);
$ret = $serviceUser->list();
/*echo $ret['id']."<br/>";
echo $ret['name']."<br/>";
echo $ret['email']."<br/><hr>";*/
foreach ($ret as  $value) {
	echo $value['id']."<br/>";
	echo $value['name']."<br/>";
	echo $value['email']."<br/><hr>";
}






?>