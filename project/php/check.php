<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		$servername="localhost";
		$username="root";
		$password="";
		$database="data2";
		$conn=mysqli_connect($servername,$username,$password,$database);
		if (!mysqli) {
			echo "unable to connect".mysqli_connect_error();
		}
$author=$_POST["author"];
$title=$_POST["title"];
$ISBN=$_POST["ISBN"];
$sql="INSERT INTO booksinfo(author,title,ISBN) values('$author','$title','$ISBN')";
$result=mysqli_query($conn,$sql);
$conn->close();


	$sql="SELECT *FROM booksinfo WHERE Id=(SELECT LAST_INSERT_ID())";
	$result=mysqli_connect($conn,$sql);
	if (mysqli_num_row($result)>0) {
		echo "<table>";
		echo "<tr>";
				echo "<th>Author</th>";
                echo "<th>Title</th>";
                echo "<th>ISBN</th>";
     while (mysqli_fetch_assoc($result)) {
     	echo "<tr>";
		echo "<td>".$row["author"]."</td>";
		echo "<td>".$row["title"]."</td>";
		echo "<td>".$row["ISBN"]."</td>";
		echo "</tr>";
		//echo "-$author".$row["author"]."-$title".$row["title"]."-ISBN".$["$ISBN"]."<br>";
	}
	echo "</table>";
	}?>
<p>record was successfully updated</p>
</body>
</html>
