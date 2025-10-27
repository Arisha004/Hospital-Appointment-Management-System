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
  <link rel="stylesheet" href="style2.css">
    
</head>
<body>
    <div class="container1">
    <h2>List of Appointments Booked</h1>
    
    <p><a href="index.php"> Go back to booking appointment page</a></p>
     <input type="text" name="search" value="<?php if(isset($_GET['search'])){
    echo $_GET['search'];
}?>" placeholder="Search here">
    <button type="submit">Search</button><br><br>
   
    <?php
    if($result->num_rows>0){
echo "<table border='1' cellpadding='10'>";
  echo   "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>

    <th>Action</th>
    
    </tr>";

    if(isset($_GET['search'])){
    $
    }
while($row=$result->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row["id"]."</td>";
    echo "<td>".$row["full_name"]."</td>";
    echo "<td>".$row["email"]."</td>";
  
    echo "<td><a href='detail.php?id=$row[id]'>More Info</a><br><br>
    <a href='update.php?id=$row[id]'>Update</a><br><br>
    <a href='delete.php?id=$row[id]'>Delete</a>
    </td>";
    echo "</tr>";
    
}
echo "</table>";
    }
    else{
        echo "no records found";
    }

?>

</div>
</body>
</html>