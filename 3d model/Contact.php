<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $msg = htmlspecialchars($_POST['message']);

    // Save to submissions.txt
    $data = "Name: $name\nEmail: $email\nMessage: $msg\n---\n";
    file_put_contents("submissions.txt", $data, FILE_APPEND);

    // Redirect to Thank You page
    header("Location: thankyou.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - 3D Supercar Showcase</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
      <!-- Navigation -->
  <nav class="navbar">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="Contact.php">Contact</a></li>
    </ul>
  </nav>
  <section class="contact-section">
    <h2 style="color:#ffcc00;">Contact Us</h2>
    <p>Have questions? Send us a message using the form below.</p>

    <form action="" method="POST" class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>
</body>
</html>
