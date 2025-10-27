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
  <style>
    table{
    width: 100%;
    border-collapse: collapse;
    justify-content: center;
    margin-top: 20px;

  }
  h2{
    text-align: left;
    margi
  }
  
  th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  tr:hover {background-color: #f1f1f1;}


  </style>

    
</head>
<body>
  <header class="navbar">
    <div class="logo">Appointment Manager</div>
    <nav>
      <ul>
        <li><a href="landingpage.html">Home</a></li>
        <li><a href="index.php">Book Appointments</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

   
        <form action="" method="get">
<div class="container1">
    <h1>Search Booking Records </h1> <br>


    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){
    echo $_GET['search'];
}?>" placeholder="Search here">
    <button type="submit">Search</button>

</div>
</form>

      <div class="container1">
    <h2>List of Appointments Booked</h2>
    
    <p><a href="index.php"> Go back to booking appointment page</a></p>
    <p><a href="searching.php"> Search for Records </a></p>
    
   <?php
   
   
if (isset($result) && $result->num_rows > 0){

echo "<table border='1' cellpadding='10'>";
  echo   "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Status</th>

    <th>Action</th>
    
    </tr>";
  while($items = $result->fetch_assoc()) {
  

        echo "<tr>";

    echo "<td>".$items["id"]."</td>";
    echo "<td>".$items["full_name"]."</td>";
    echo "<td>".$items["email"]."</td>";
    echo "<td>".$items["status"]."</td>";
      echo "<td><a href='detail.php?id=$items[id]'>More Info</a><br><br>
    <a href='update.php?id=$items[id]'>Update</a><br><br>
    <a href='delete.php?id=$items[id]'>Delete</a>
    </td>";

       echo "</tr>";    
         
        }
    
    echo "</table>";
   }
    elseif (isset($_GET['search'])){
        echo "No Record Found";
    }



    

?>

</div>
</body>
</html>