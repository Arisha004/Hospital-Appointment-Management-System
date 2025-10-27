
<?php
include 'db.php';
  if(isset($_GET['search'])){
    $filteredvalues=$_GET['search'];
    $sql = "SELECT * FROM appointments 
        WHERE CONCAT(full_name, ' ', email) LIKE '%$filteredvalues%'";
    $result=$conn->query($sql);

    }


?>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
        <style>
 table{
    width: 100%;
    border-collapse: collapse;
    justify-content: center;
    margin-top: 20px;

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

        <form action="" method="get">
<div class="container1">
    <h1>Searching Booking Records of Particular Person</h1> 
      <p><a href="index.php"> Go back to Listing appointment page</a></p>
  


    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){
    echo $_GET['search'];
}?>" placeholder="Search here">
    <button type="submit">Search</button>

</div>
</form>


<?php
if (isset($result) && $result->num_rows > 0){
 
echo "<table border='1' cellpadding='10'>";
  echo   "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
   
    
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


    </body>
</html>
