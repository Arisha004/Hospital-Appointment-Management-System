
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
include 'db.php'
mysql_select_db("blog1")or die(mysql_error());
$username = mysql_real_escape_string($_GET['username']);
$result = mysql_query("SELECT * FROM member WHERE username = '" + $username + "'");
print_r($result);

?>


    </body>
</html>
