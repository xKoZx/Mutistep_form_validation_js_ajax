<?php
$conn=new mysqli("localhost","root","","Your_database");
if($conn->connect_error)
{
	echo"error";
}
else
{
	echo"connected";
}
?>
