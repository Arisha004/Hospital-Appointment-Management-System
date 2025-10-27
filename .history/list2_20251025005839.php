<?php
include 'db.php';
$sql="select * from appointments";
$result=$conn->query($sql);


?>

<?php
include 'db.php';
  if(isset($_GET['search'])){
    $filteredvalues=$_GET['search'];
    $sql = "SELECT * FROM appointments 
        WHERE CONCAT(full_name, ' ', email) LIKE '%$filteredvalues%'";
    $result=$conn->query($sql);

    }


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
 
        <form action="" method="get">
<div class="container1">
    <h1>Searching Booking Records of Particular Person</h1> 


    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){
    echo $_GET['search'];
}?>" placeholder="Search here">
    <button type="submit">Search</button>

</div>
</form>

      <div class="container1">
    <h2>List of Appointments Booked</h1>
    
    <p><a href="index.php"> Go back to booking appointment page</a></p>
    <p><a href="searching.php"> Search for Records </a></p>
    
   <?php
   
   
if (isset($result) && $result->num_rows > 0){

echo "<table border='1' cellpadding='10'>";
  echo   "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>

    <th>Action</th>
    
    </tr>";
  while($items = $result->fetch_assoc()) {
  

        echo "<tr>";

    echo "<td>".$items["id"]."</td>";
    echo "<td>".$items["full_name"]."</td>";
    echo "<td>".$items["email"]."</td>";
       echo "</tr>";    
         
        }
    
    echo "</table>";
   }
    elseif (isset($_GET['search'])){
        echo "No Record Found";
    }

?>
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