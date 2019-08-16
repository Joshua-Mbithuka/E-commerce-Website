<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    .table
        {
          border=none;
        }
  </style>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">addpurchases<i class="pl-2 fa fa-plus"></i></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>
          	<?php
          	$servername="localhost";
$username="root";
$password="";
$database="data2"; 
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
	echo "connection failed".mysqli_connect_error();
}
$sql="SELECT *FROM booksinfo where state='declared'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {	
	echo '<table class="table">';
		echo "<tr>";
                echo "<th>Author</th>";
                echo "<th>Title</th>";
                echo "<th>ISBN</th>";
                echo "<th>Action</th>";
            echo "</tr>";

	//output data of each row
	while ($row=mysqli_fetch_assoc($result)) {
		$test=$row["author"].$row["title"];
		echo "<tr>";
		echo "<td>".$row["author"]."</td>";
		echo "<td>".$row["title"]."</td>";
		echo "<td>".$row["ISBN"]."</td>";
    echo '<td><form method="POST">
             <input type="submit" value="Remove" name="removebtn" class="btn btn-outline-info"><input  type="hidden" name="delid" value="'.$row["id"].'">
             <input type="submit" value="update" name="update" class="btn btn-outline-info"><input type="hidden" name="update" value="',$row["id"].'"></form>
          </td>';
          
		echo "</tr>";
		//echo "-$author".$row["author"]."-$title".$row["title"]."-ISBN".$["$ISBN"]."<br>";
	}

	echo "</table>";

  if(isset($_POST['removebtn'])){
            $delid=$_POST['delid'];
            $sql="update booksinfo set state='undeclared' where id='$delid'";
            $res=mysqli_query($conn,$sql);
           echo' <meta http-equiv="refresh" content="1">';
  
           
          }
}
else
	{
		echo "zero results";
	}
          	?>
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" id="">save</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script></script>

</body>
</html>
