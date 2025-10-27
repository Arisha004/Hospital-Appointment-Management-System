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
$sql="select * from appointments where id='$id' ";
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
    <!-- <h1>Update student Data</h1>
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
    </form> -->
    <?php


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service_type = $_POST['service_type'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $gender = $_POST['gender'];
    $message=$_POST['message'];
    $status=$_POST['status'];
    
  
    $sql = "INSERT INTO appointments (full_name,email,phone,service_type,appointment_date,appointment_time, gender,message,status) VALUES ('$full_name','$email','$phone','$service_type','$appointment_date','$appointment_time','$gender','$message','$status')";
  if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Appointment updated successfully!');
            window.location='landingpage.html';
          </script>";
} else {
    echo "<script>
            alert('Error while updating the appointment.');
          </script>";
}



 
}


?>

</body>
</html>

