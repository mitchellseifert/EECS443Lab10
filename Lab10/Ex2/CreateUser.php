<?php
$user = $_POST["user"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "m571s606", "uig3Feup", "m571s606");
if ($mysqli->connect_erno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$check = "select * from Users where user_id ='".$user."'";
$query = "insert into Users value ('".$user."')";
if($mysqli->query($query) && $user != ''){
	echo "User Added";
}
elseif($user == ' '){
	echo "Unable to add user: blank field<br>";
}
elseif($mysqli->query($check))
{
	echo "User already exists";
}
$mysqli->close();
?>
