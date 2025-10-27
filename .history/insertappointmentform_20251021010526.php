<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service_type = $_POST['service_type'];
    

    $sql = "INSERT INTO appointments (name, email, phone, message) VALUES ('$name', '$email', '$phone','$message')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Form submitted successfully!');
            window.location='landingpage.html';
          </script>";
} else {
    echo "<script>
            alert('Error while submitting form.');
          </script>";
}


 
}
 
?>



