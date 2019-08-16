<?php
$servername="localhost";
$username="root";
$password="";
$database="data2";
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
	echo "connection failed".mysqli_connect_error();
}
$sql="SELECT *FROM booksinfo";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {	
	echo "<table border=1>";
		echo "<tr>";
                echo "<th>Author</th>";
                echo "<th>Title</th>";
                echo "<th>ISBN</th>";
            echo "</tr>";

	//output data of each row
	while ($row=mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>".$row["author"]."</td>";
		echo "<td>".$row["title"]."</td>";
		echo "<td>".$row["ISBN"]."</td>";
		echo "</tr>";
		//echo "-$author".$row["author"]."-$title".$row["title"]."-ISBN".$["$ISBN"]."<br>";
	}
	echo "</table>";
}
else
	{
		echo "zero results";
	}
//closing the connection

mysqli_close($conn)
?>