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
    <link rel="stylesheet" href="style2.css">
  <style>
    p{
        font-size: 20px;
        text-decoration: solid;
        color: black;
        
    }
    h1{
        margin-top: 40px;
        text-align: center;
        color: white;
    }
    a{
    color: #007bff;
    text-decoration: none;
    }
  </style>
    
</head>
<body>
     <header class="navbar">
    <div class="logo">Appointment Manager</div>
    <nav>
      <ul>
        <li><a href="landingpage.html">Home</a></li>
        <li><a href="index.php">Book Appointments</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

   
    <h1>Detail list of Person which has id:  <?php echo  $id ; ?></h1>
          <form action="" method="get">
<div class="container1">

    
    <p><a href="list.php"> Go back to list page</a></p><br>
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
</div>
<
<footer>
    <p>© 2025 Appointment Management System , Made by Arisha Mumtaz(2312358)</p>
  </footer>
 
</body>
</html>