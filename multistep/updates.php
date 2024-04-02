<?php
require("connections.php");
$name=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$a=$conn->query("update student set subject='{$subject}',email='{$email}' where name='{$name}'");
if($a)
{
	echo"succhess";
}
else
{
	echo"not";
}
?>
