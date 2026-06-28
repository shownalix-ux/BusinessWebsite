<?php $pageTitle="Contact"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | Business Website</title>

<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="container">

<h1>Contact Us</h1>

<p>Get in touch for your next project.</p>

<form>
<input type="text" placeholder="Your Name" required><br><br>
<input type="email" placeholder="Your Email" required><br><br>
<textarea placeholder="Your Message" required></textarea><br><br>

<button class="btn" type="submit">Send Message</button>
</form>

</div>

</body>
</html>
^\
<?php include("includes/navbar.php"); ?>

<section class="contact-section">
    <div class="container">

        <div class="section-title">
            <h2>Contact Us</h2>
            <p>Have a project in mind? Let's build something amazing together.</p>
        </div>

        <div class="contact-wrapper">

            <div class="contact-info">
                <h3>Get In Touch</h3>

                <p>📍 Pakistan</p>
                <p>📧 your@email.com</p>
                <p>📱 +92 371 3727350</p>

                <p>
                    We usually reply within 24 hours.
                </p>
            </div>

            <form action="#" method="POST" class="contact-form">

                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required>

                <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required>

                <input
                    type="text"
                    name="subject"
                    placeholder="Subject"
                    required>

                <textarea
                    name="message"
                    rows="6"
                    placeholder="Your Message"
                    required></textarea>

                <button type="submit">
                    Send Message
                </button>

            </form>

        </div>

    </div>
</section>

<?php include("includes/footer.php"); ?>
^\
<?php
$pageTitle = "Contact";
require_once "config/database.php";

$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if ($name != "" && $email != "" && $message != "") {

        $stmt = $db->prepare("INSERT INTO messages (name,email,message) VALUES (?,?,?)");
        $stmt->execute([$name,$email,$message]);

        $success = "Your message has been sent successfully!";
    }
}

include("includes/navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Contact Us</title>

<link rel="stylesheet" href="assets/css/style.css">

<style>

.container{
max-width:800px;
margin:40px auto;
padding:20px;
}

.contact-form{
display:flex;
flex-direction:column;
gap:15px;
}

.contact-form input,
.contact-form textarea{

padding:12px;
border:1px solid #ccc;
border-radius:8px;
font-size:16px;

}

.contact-form button{

padding:14px;
background:#007bff;
color:#fff;
border:none;
border-radius:8px;
cursor:pointer;

}

.success{

background:#d4edda;
color:#155724;
padding:12px;
border
