<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $sql = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($conn, $sql);

  if ($result->num_rows > 0) {
    $row=$result->fetch_assoc();
 
    if (password_verify($password, $row["password"])) { //database mei jo password hai $row[password] woh match karraha hai $password jo user ne form mein dia hai aur humne usko variable $password mein dala hai uper password verify function use karke built-in php ka
      echo "<p class='success'>Login successful! Welcome, " . $row['username'] . "......" . ".</p>";
    
  header("refresh:3; url=landingpage.html");
  exit();


    } else {
      echo "<p class='error'>Incorrect password!</p>";
    }
  } else {
    echo "<p class='error'>Email not found!</p>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form1-container">
    <h2>Login</h2>
    <form method="POST">
      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Password:</label>
      <input type="password" name="password" required minlength="6" maxlength="20">

      <button type="submit">Login</button>

      <p>Don’t have an account? <a href="signup.php">Sign up here</a></p>
    </form>
  </div>
</body>
</html>
