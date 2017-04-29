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

foreach ($query = $mysqli->query($sql) as  $user) {
	echo "name: ".$user['name']."<br/>";
}




//if($query = $mysqli->query($sql)){

	#fetch_all
		#MYSQLI_NUM
		#MYSQLI_ASSOC
		#MYSQLI_BOTH

	#$user = $query->fetch_all(MYSQLI_BOTH);
	#var_dump($user);
	#echo "email: ".$user[0]["email"];
	#echo "  -    email: ".$user[0][2];

	/*foreach ($user as $value) {
		echo "name: ".$value["name"]."<br/>";
	}*/

	#fetch_array
		#MYSQLI_NUM
		#MYSQLI_ASSOC
		#MYSQLI_BOTH

	//$user = $query->fetch_array();
	//var_dump($user);

	//echo "name: ".$user["name"]."<br/>";

	/*while ($user = $query->fetch_array(MYSQLI_ASSOC)) {
		echo "name: ".$user["name"]."<br/>";
	}*/
	
	
		
	#fetch_row
	#$user = $query->fetch_row();
	//var_dump($user);
	#echo "name: ".$user[1]."<br/>";
	

	#fetch_object
	#$user = $query->fetch_object();
	//var_dump($user);
	#echo "name: ".$user->name."<br/>";



	/*while ($user = $query->fetch_object()) {
		$row[] = $user;
	}

	foreach ($row as $value) {
		echo "name: ".$value->name."<br/>";
	}*/
	
	

//}





?>