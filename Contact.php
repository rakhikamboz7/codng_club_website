<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/5400453 - Copy-Photoroom.png-Photoroom.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Contact.css">
</head>
<body>
    <div class="contact-container">
        <div class="contact-content">
            <div class="form-container" id="form-container">
                <h1>Contact Us</h1>
                <p>Questions, bug reports, feedback: we’re here for it all.</p>
                <form id="contact-form">
                    <label for="email">Your Email Address</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com" required>
                    
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                    
                    <label for="message">How can we help?</label>
                    <textarea id="message" name="message" rows="5" placeholder="Describe your issue here..." required></textarea>
                    
                    <button type="submit">Send</button>
                </form>
            </div>
            <div class="image-container">
                <img src="images\Contact-Us-Vector-Illustration-Part-02-1.jpg" alt="Support Team">
                <div class="social-icons">
                    <a href="#" class="icon">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#" class="icon">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script src="Contact.js"></script>
</body>
</html>
