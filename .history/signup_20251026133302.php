<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm = $_POST["confirm"];
  $phone = $_POST["phone"];

  if ($password != $confirm) {
    echo "<p class='error'>Passwords do not match!</p>";
  } else {
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    $sql="SELECT * FROM users WHERE email='$email'";
    $check=$conn->query($sql);

   if ($check->num_rows > 0) {
     {
      echo "<p class='error'>Email already registered!</p>";
    } else {
      $insert = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed')";
      if (mysqli_query($conn, $insert)) {
        echo "<p class='success'>Signup successful! You can now login.</p>";
      } else {
        echo "<p class='error'>Error while saving data.</p>";
      }
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form-container">
    <h2>Signup</h2>
    <form method="POST">
      <label>Full Name:</label>
      <input type="text" name="username" required minlength="3" maxlength="25" pattern="[A-Za-z\s]+" title="Only letters allowed">

      <label>Email:</label>
      <input type="email" name="email" required>

      <label>Phone Number:</label>
      <input type="text" name="phone" required pattern="[0-9]{10,12}" title="Enter 10 to 12 digits only">

      <label>Password:</label>
      <input type="password" name="password" required minlength="6" maxlength="20">

      <label>Confirm Password:</label>
      <input type="password" name="confirm" required minlength="6" maxlength="20">

      <button type="submit">Signup</button>

      <p>Already have an account? <a href="login.php">Login here</a></p>
    </form>
  </div>
</body>
</html>
