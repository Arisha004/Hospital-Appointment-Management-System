<?php
include 'db.php';
$id=$_GET['id'];
$sql="select * from appointments where id='$id'";
$result=$conn->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    p{
        font-size: 20px;
        text-decoration: solid;
        color: black;
        
    }
  </style>
    
</head>
<body>
    <h1>Detail list of appointments with <?php echo  $id ; ?></h1>
   
    <p><a href="appointment_bookingticket.php?id=<?php echo $id ; ?>" class="btn">Generate Appointment Booking details</a></p>

    <p><a href="list.php"> Go back to list page</a></p>
    <?php
    if($result->num_rows>0){


while($row=$result->fetch_assoc()){
  
    echo "<p>ID: ".$row["id"]."<br></p>";
    echo "<p>NAME: ".$row["full_name"]."<br></p>";
    echo "<p>EMAIL: ".$row["email"]."<br></p>";
    echo "<p>PHONE : ".$row["phone"]."<br></p>";
    echo "<p>SERVICE TYPE: ".$row["service_type"]."<br></p>";
    echo "<p>APPOINTMENT DATE: ".$row["appointment_date"]."<br></p>";
    echo "<p>APPOINTMENT TIME: ".$row["appointment_time"]."<br></p>";
    echo "<p>GENDER: ".$row["gender"]."<br></p>";
    echo "<p>MESSAGE: ".$row["message"]."<br></p>";
    
    echo "<p>STATUS: ".$row["status"]."<br></p>";
    
    echo "<p>CREATED AT: ".$row["created_at"]."<br></p>";
    
   
    
}

    }
    else{
        echo "no records found";
    }

?>
</body>
</html>