
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Appointment</title>
<style>
  body { font-family: Arial; background-color: #f2f2f2; }
  .container { width: 50%; margin: 40px auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
  h2 { text-align: center; color: #007bff; }
  label { font-weight: bold; display: block; margin-bottom: 5px; }
  input, select, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
  }
  input[type=submit] {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 5px;
  }
  input[type=submit]:hover {
      background-color: #0056b3;
  }
</style>
</head>
<body>

<div class="container">
  <h2>Book Appointment</h2>
  <form method="POST">

    <label>Full Name:</label>
    <input type="text" name="full_name" required pattern="[A-Za-z\s]+" title="Name should contain only letters.">

    <label>Email:</label>
    <input type="email" name="email" required>

    <label>Phone (11 digits):</label>
    <input type="text" name="phone" required pattern="[0-9]{11}" title="Phone number must be exactly 11 digits." maxlength="11">

    <label>Service Type:</label>
    <select name="service_type" required>
      <option value="">-- Select Service --</option>
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
      <option value="">-- Select Gender --</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>

    <label>Message (optional):</label>
    <textarea name="message" rows="3" placeholder="Add any additional notes..."></textarea>

    <input type="submit" name="submit" value="Book Appointment">
  </form>
</div>

</body>
</html>