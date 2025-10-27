<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    

    $sql = "INSERT INTO contactform (name, email, phone, message) VALUES ('$name', '$email', '$phone','$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>New record created successfully</h2>";
        echo "<p><a href=''>Go Back</a></p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

 
}
 
?>



