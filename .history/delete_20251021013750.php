<?php

include 'db.php';
$id=$_GET['id'];
$sql="Delete from appoinments where id ='$id'";
 $result=$conn->query($sql);
 
?>