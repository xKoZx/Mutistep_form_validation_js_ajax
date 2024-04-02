<?php
$conn=new mysqli("localhost","root","","homework");
if($conn->connect_error)
{
	echo"error";
}
else
{
	echo"connected";
}
?>
