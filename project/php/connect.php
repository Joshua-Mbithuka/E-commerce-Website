<?php
$servername="localhost";
$username="root";
$password="";
$database="data2";
$conn=mysqli_connect($servername,$username,$password,$database);
#check connection
if ($conn===false) {
	die("ERROR.could not connect".$conn->connect_error);	
}
else
	{
		echo "connection successfully created";
	}
$conn->close();
?>