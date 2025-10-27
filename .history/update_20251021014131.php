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
$sql="select * from students where id='$id' ";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
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
    <h1>Update student Data</h1>
    <form id="registerForm" action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ;?>">
        <label for="name">Name:</label>
        <input type="text" value="<?php echo $row['name'];?>" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email"value="<?php echo $row['email'];?>"  id="email" name="email" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number"value="<?php echo $row['age'];?>"  id="age" name="age" required><br><br>

        <checkbox id="terms" name="terms" required>
        <input type="checkbox" required>
         <label for="terms">I agree to the terms and conditions</label><br><br>
       

        
        
        <button type="submit">Update</button>
    </form>
    <?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id=$_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql="UPDATE students SET name='$name', email='$email', age='$age' WHERE id='$id' ";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2> record updated successfully</h2>";
        echo "<p><a href='index.html'>Go Back</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
}


?>

</body>
</html>

