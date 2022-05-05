<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "m571s606", "uig3Feup", "m571s606");
if ($mysqli->connect_erno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$id = $_POST["posts"];
echo"<table style='border: 1px solid;>";
echo"<tr>th style='border: 1px;'>Post Id Deleted</th></tr>";
for($i = 0;$i<count($_POST["posts"]);$i++)
{
	$query[i] = "Delete from posts where post_id='".$id[$i]."'";
	if($mysqli->query($query[$i])){
			echo "<tr><td style='border: 1px solid;'>".$id[$i]."</td></tr>";
	}

}
echo "</table>";
$mysqli->close();
?>
