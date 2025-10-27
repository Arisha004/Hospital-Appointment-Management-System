<?php

include 'db.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
elseif(isset($_POST['id'])){
    $id=$_POST['id'];
}
else{
    die('missing id');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        <form action="" method="get">
<div class="container1">

    <input type="text" name="search" value="<?php if(isset($_GET['search'])){
    echo $_GET
}?>" placeholder="Search here">
    <button type="submit">Search</button>
</form>


    </body>
</html>
