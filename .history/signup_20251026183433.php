
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
          <header class="navbar">
    <div class="logo">Hospital Appointment Management System</div>
    <nav>
      <ul>
        <li><a href="landingpage.html">Home</a></li>
          <li><a href="signup.php">Signup</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="index.php">Book Appointments</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="form1-container">
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
  
 <footer>
    <p>© 2025 Appointment Management System , Made by Arisha Mumtaz(2312358)</p>
  </footer>
</body>
</html>
