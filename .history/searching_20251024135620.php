
<?php
include 'db.php';
  if(isset($_GET['search'])){
    $filteredvalues=$_GET['search'];
    $sql="select * from appointments where CONCAT(full_name,email) Like '%$filteredvalues%'";
    $result=$conn->query($sql);

    }


?>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        <form action="" method="get">
<div class="container1">

    <input type="text" name="search" required value="<?php if(isset($_GET['search'])){
    echo $_GET['search'];
}?>" placeholder="Search here">
    <button type="submit">Search</button>
</form>

<?php
   if($result->num_rows>0){

echo "<table border='1' cellpadding='10'>";
  echo   "<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
    
    </tr>";

        foreach($result as $items){
           
        echo ">"

    echo "<td>".$items["id"]."</td>";
    echo "<td>".$items["full_name"]."</td>";
    echo "<td>".$items["email"]."</td>";
           
         
        }
    }

?>


    </body>
</html>
