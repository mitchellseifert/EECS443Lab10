<?php
$user = $_POST["user"];
$post = $_POST["post"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "m571s606", "uig3Feup", "m571s606");
if ($mysqli->connect_erno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$query = "insert into Posts(content, author_id) values('".$post."','".$user."')";
if($post == ''){
	echo "Post Empty";
}
elseif($mysqli->query($query))
{
	echo "Post Saved";
}
else
{
	echo "Not a Primary User";
}
$mysqli->close();
?>
