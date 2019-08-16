<?php
		$servername="localhost";
		$username="root";
		$password="";
		$database="data2";

	$mysqli = new mysqli("localhost", "root", "", "data2");
	if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
	}
 
// create a table query
	$sql = "CREATE TABLE booksinfo(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    author VARCHAR(30) NOT NULL,
    title VARCHAR(30) NOT NULL,
    ISBN VARCHAR(70) NOT NULL UNIQUE
	)";
	if($mysqli->query($sql) === true){
    echo "Table created successfully.";
	} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
	}
	$mysqli->close();
		?>
