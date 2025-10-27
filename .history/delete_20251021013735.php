<?php

include 'db.php';
$id=$_GET['id'];
$sql="Delete from students where id ='$id'";
 $result=$conn->query($sql);
  if ($conn->query($sql) === TRUE) {
        echo "<h2> record deleted successfully</h2>";
        echo "<p><a href='index.html'>Go Back</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
?>