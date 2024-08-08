<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="11_Services.css">
    <link rel="icon" type="image/png" href="images/5400453 - Copy-Photoroom.png-Photoroom.png">
    <title>Our Services</title>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <img src="images/5400453 - Copy-Photoroom.png-Photoroom.png" alt="Logo">
                <h1>Coding Club</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="9_practice.html">Practice</a></li>
                    <li><a href="10_services.html">Services</a></li>
                    <li><a href="13_tutorials.php">Tutorials</a></li>
                    <li><a href="#">Hackathon</a></li>
                </ul>
            </nav>
            <div class="toggle-theme">
                <input type="checkbox" id="theme-toggle">
                <label for="theme-toggle"></label>
            </div>
            <div class="login-button">
                <a href="Signup.html">Login/Sign Up</a>
            </div>
        </div>
    </header>
    <div class="bod">
        <div class="heading">
            <h5>Our</h5>
            <h1>Services</h1>
            <div class="conta" id="expandable-box">
                <img src="images/white.jpg" alt="">
                <p>We're excited to take our students' coding practice experience to the next level by introducing a more interactive platform. In addition to the existing features, we'll implement hands-on coding.</p>
            </div>
        </div>
    </div>
    <div class="services-grid">
        <a href="typing-speed.html" class="service-button large">
            <img src="images/e9aeef3aad0ba205aa7743fab57b12774cfa13aa-vitesse-frappe.jpg" alt="Typing Speed">
            <p>Test Your Typing Speed</p>
        </a>
        <a href="practices.html" class="service-button medium">
            <img src="images/images (1).jpeg" alt="Practices">
            <p>Practices</p>
        </a>
        <a href="code-editors.html" class="service-button small">
            <img src="images/download.jpeg" alt="Code Editors">
            <p>Code Editors</p>
        </a>
        <a href="about.html" class="service-button large">
            <img src="images/istockphoto-1163999037-612x612.jpg" alt="About Us">
            <p>About Us</p>
        </a>
        <a href="contact.html" class="service-button medium">
            <img src="images/images.png" alt="Contact Us">
            <p>Contact Us</p>
        </a>
        <a href="tutorials.html" class="service-button small shift-up">
            <img src="images/pngtree-laptop-player-screen-tutorial-video-abstract-flat-color-icon-png-image_1620855.jpg" alt="Tutorials">
            <p>Tutorials</p>
        </a>
    </div>
    <hr style="box-shadow: 20px;">
    <?php include '8_footer.php'; ?>
<script src="services.js"></script>
</body>
</html>