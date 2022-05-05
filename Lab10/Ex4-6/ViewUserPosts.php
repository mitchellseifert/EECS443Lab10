<?php
$author = $_POST["posts"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "m571s606", "uig3Feup", "m571s606");
if ($mysqli->connect_erno){
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
$query = "select content from Posts where author_id='".$author."'";
if($result = $mysqli->query($query)){
	echo "<table style = 'border:1px solid;'>";
	echo "<th style = 'border:1px solid;'>".$author."'s Posts</th>";
	while($row = $result->fetch_assoc()){
		echo "<tr><td>";
		echo $row["content"];
		echo "</td></tr>";
	}
	echo "</table>";
	$results->free();

	
}
$mysqli->close();
?>
