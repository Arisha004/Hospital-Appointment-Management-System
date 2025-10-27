<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph = $_POST['email'];
    $email = $_POST['email'];
    
    $age = $_POST['age'];

    $sql = "INSERT INTO students (name, email, age) VALUES ('$name', '$email', '$age')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>New record created successfully</h2>";
        echo "<p><a href='index.html'>Go Back</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
}
 
?>



