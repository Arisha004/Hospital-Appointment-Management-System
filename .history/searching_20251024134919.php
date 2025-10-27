
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
include 'db.php';
  if(isset($_GET['search'])){
    $filteredvalues=$_GET['search'];
    $query="select * from appointments where CONCAT(full_name,email) Like '%$filteredvalues%";
    $result=$conn->query($query);
    }

?>


    </body>
</html>
