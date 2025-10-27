<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service_type = $_POST['service_type'];

    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $gender = $_POST['gender'];
    $message=$_
    

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



