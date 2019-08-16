<?php
		$servername="localhost";
		$username="root";
		$password="";
		$conn=new mysqli($servername,$username,$password);
		if ($conn===false) {
			die("error could not connect".$conn->connect_error);
		}
		$datab="CREATE DATABASE  data2";
		if ($conn->query($datab)===TRUE) {
			echo "database created successfully";
		}
		else
			{
				echo "could create database".$conn->connect_error;
			}
		$conn->close();
	?>
