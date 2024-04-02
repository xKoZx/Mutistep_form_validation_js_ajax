<?php
require("connections.php");
$name=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$query=$conn->prepare("insert into student values(?,?,?)");
$query->bind_param('sss',$name,$subject,$email);
if($qyery->execute()){
	echo"ssss";
}
else{
	echo"not";
}
?>