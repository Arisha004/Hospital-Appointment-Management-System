<?php

include 'db.php';
$id=$_GET['id'];
$sql="Delete from appoinments where id ='$id'";
 $result=$conn->query($sql);
  if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Appointment booked successfully!');
            window.location='landingpage.html';
          </script>";
} else {
    echo "<script>
            alert('Error while booking appointment.');
          </script>";
}

?>