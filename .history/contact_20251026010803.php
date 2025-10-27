<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<section id="contact" class="contact">
    <div class="container contact-inner">
      <h2>Contact Us</h2>
      <p>If you have any questions or feedback about our Appointment Manager, feel free to reach out!</p>

      <form action="insertcontactform.php" method="post" class="contact-form">
        <div class="form-group">
          <label for="name">Full Name <span>*</span></label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required pattern="[A-Za-z\s]{3,}">
        </div>

        <div class="form-group">
          <label for="email">Email Address <span>*</span></label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="phone">Phone Number<span>*</span></label>
          <input type="tel" id="phone" name="phone" placeholder="03XXXXXXXXX" required pattern="[0-9]{11}" title="Enter 11-digit number only">
        </div>

        <div class="form-group">
          <label for="message">Message <span>*</span></label>
          <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required minlength="10"></textarea>
        </div>

        <button type="submit" class="btn">Send Message</button>
      </form>
    </div>
    
</body>
</html>