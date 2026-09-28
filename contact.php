<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Jewellery Bliss</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<?php include "navbar.php"; ?>
<div class="contact-wrapper">

    <div class="contact-box">
        <h1>Contact Us</h1>

        <form method="post">
            <label>Name</label>
            <input type="text" placeholder="Enter your name" required>

            <label>Email</label>
            <input type="email" placeholder="Enter your email" required>
            <br><br>

            <label>Message</label>
            <textarea placeholder="Enter your message"></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

</div>

    <p style="text-align:center; margin-top:15px;">
        📧 Email: jewellerybliss@gmail.com <br>
        📞 Phone: +91 98765 43210
    </p>
</div>

</body>
</html>




