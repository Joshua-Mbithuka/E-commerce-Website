<?php
/*connection*/
include_once("connect.php");
// Attempt select query execution
$sql = "SELECT * FROM booksinfo";
$result=mysqli_query($conn,$sql);
if($result === True){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>Author</th>";
                echo "<th>Title</th>";
                echo "<th>ISBN</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Author'] . "</td>";
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['ISBN'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} 
$conn->close();
?>