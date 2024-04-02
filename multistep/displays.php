<?php
require("connections.php");
$a=$conn->query("select * from student");
if($a->num_rows>0)
{
	echo"<table><tr><td>name</td><td>subject</td><td>email</td></tr>";
	while($row=$a->fetch_assoc()){
		echo"<tr><td>{$row['name']}</td><td>{$row['subject']}</td><td>{$row['email']}</td>";
	}
}
else{
	echo"no rows found";
}
?>
	<html>
	<head>
	<style>
	table,td,tr{
		border:1px solid black;
	}
	</style>
	</head>
	</html>