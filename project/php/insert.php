
<?php
$servername="localhost";
$username="root";
$password="";
$database="data2";
$conn=new mysqli($servername,$username,$password,$database);
#check connection
if ($conn===false) {
	die("ERROR.could not connect".$conn->connect_error);	
}
$sql="INSERT INTO booksinfo(author,title,ISBN) values('James','Mutua','7896ghtf')";
if ($conn->query($sql)===true) {
	echo "successfully created";
}else{echo "couldn update table".$conn->error;}
$conn->close();
?>