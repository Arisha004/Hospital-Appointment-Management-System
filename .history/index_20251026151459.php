
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Appointment</title>
<link rel="stylesheet" href="style2.css">

</head>
<body>
 <header class="navbar">
    <div class="logo">Appointment Manager</div>
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

   
<div class="container1">
  <h2>Book Appointment</h2>
  <form  action="insertappointmentform.php" method="POST">

    <label>Full Name:</label>
    <input type="text" name="full_name" required pattern="[A-Za-z\s]+"   minlength="3" 
       maxlength="30" title="Name should contain only letters.">
       <?php

        
?>

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Phone (11 digits):</label>
    <input type="text" name="phone" required pattern="[0-9]{11}" title="Phone number must be exactly 11 digits." maxlength="11">

    <label>Service Type:</label>
    <select name="service_type" required>
      <option value=""> Select Service </option>
      <option value="Consultation">Consultation</option>
      <option value="Follow-up">Follow-up</option>
      <option value="Check-up">Check-up</option>
      <option value="Emergency">Emergency</option>
    </select>

    <label>Appointment Date:</label>
    <input type="date" name="appointment_date" required min="<?php echo date('Y-m-d'); ?>">

    <label>Appointment Time:</label>
    <input type="time" name="appointment_time" required>

    <label>Gender:</label>
    <select name="gender" required>
      <option value=""> Select Gender </option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

    <label>Message (optional):</label>
    <textarea name="message" rows="3" placeholder="Add any additional notes..."></textarea>
   <label>Status:</label>
    <select name="status" required>
      <option value="Pending">Pending</option>
      <option value="Confirmed">Confirmed</option>
      <option value="Cancelled">Cancelled</option>
      <option value="Completed">Completed</option>
    </select>

    <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">

    <button type="submit" name="submit"> Book Appointment </button>
  </form>


<div style="margin-top:20px;">
    <form action="list.php" method="get">
    <button type="submit">View Data</button>
    </form>
</div>
</div>

    <footer>
    <p>© 2025 Appointment Management System , Made by Arisha Mumtaz(2312358)</p>
  </footer> 
</div>
</body>
</html>