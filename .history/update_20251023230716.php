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
     <h1>Update student Data</h1> 

<form  action="update.php" method="POST">
     <form id="registerForm" action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ;?>">


    <label>Full Name:</label>
    <input type="text" value="<?php echo $row['full_name'];?>" name="full_name" required pattern="[A-Za-z\s]+" title="Name should contain only letters.">

    <label>Email:</label>
    <input type="email" value="<?php echo $row['email'];?>"  name="email" required>

    <label>Phone (11 digits):</label>
    <input type="text" value="<?php echo $row['phone'];?>"  name="phone" required pattern="[0-9]{11}" title="Phone number must be exactly 11 digits." maxlength="11">

    <label>Service Type:</label>
    <select name="service_type" required>
      <option value="">-- Select Service --</option>
      <option value="Consultation">Consultation</option>
      <option value="Follow-up">Follow-up</option>
      <option value="Check-up">Check-up</option>
      <option value="Emergency">Emergency</option>
    </select>

    <label>Appointment Date:</label>
    <input type="date" value="<?php echo $row['appointment_date'];?>"  name="appointment_date" required min="<?php echo date('Y-m-d'); ?>">

    <label>Appointment Time:</label>
    <input type="time"  value="<?php echo $row['appointment_time'];?>"name="appointment_time" required>

    <label>Gender:</label>
    <select name="gender" required>
      <option value="">-- Select Gender --</option>
      <option value="Male"
      <?php
      if($row['gender']=='Male'){
        echo "selected";
      }

?>
      >
        Male</option>
      <option value="Female"
      <?php
         if($row['gender']=='Female'){
        echo "selected";
      }
      ?>
      >Female</option>
      <option value="Other"
      <?php

   if($row['gender']=='Other'){
        echo "selected";
      }

?>
      >Other</option>
    </select>

    <label>Message (optional):</label>
    <textarea name="message" rows="3" placeholder="Add any additional notes..."><?php echo $row['message']?></textarea>
  <label>Status:</label>
    <select name="status" required>
      <option value="Pending"
      <?php
   if($row['status']=='Pending'){
        echo "selected";
      }

?>
      >Pending</option>
      <option value="Confirmed"
           <?php
   if($row['status']=='Confirmed'){
        echo "selected";
      }

?>
      >Confirmed</option>
      <option value="Cancelled"
           <?php
   if($row['status']=='Cancelled'){
        echo "selected";
      }

?>
      >Cancelled</option>
      <option value="Completed"
           <?php
   if($row['status']=='Completed'){
        echo "selected";
      }

?>
      >Completed</option>
    </select>

    <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <button type="submit" name="submit"> Update Appointment</button>
  </form>




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

