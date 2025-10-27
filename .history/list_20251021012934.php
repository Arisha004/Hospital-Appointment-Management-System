<?php
include 'db.php';
$sql="select * from appointments";
$result=$conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="style.css">
  
    
</head>
<body>
    <h2>List of Appointments Booked</h1>
    <p><a href="index.php"> Go back to registeration page</a></p>
    <?php
    if($result->num_rows>0){
echo "<table border='1' cellpadding='10'>";
  echo   "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>

    <th>Action</th>
    
    </tr>";

while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["full_name'"]."</td>";
    echo "<td>".$row["email"]."</td>";
  
    echo "<td><a href='detail2.php?id=$row[id]'> </a></td>";
    echo "</tr>";
    
}
echo "</table>";
    }
    else{
        echo "no records found";
    }

?>
</body>
</html>