<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="About.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="website icon" type="png"
    href="images\5400453 - Copy-Photoroom.png-Photoroom.png">
    <title>About Us</title>
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
                    <li><a href="#practice.php">Practice</a></li>
                    <li><a href="#Services.html">Services</a></li>
                    <li><a href="#tutorials.php">Tutorials</a></li>
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
            <h1>ABOUT</h1>
            <h5>US</h5>
            <div class="conta" id="expandable-box">
                <img src="images/white.jpg" alt="">
            </div>
        </div>
    </div>
    <br>
    <br>
    <hr>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="card">
                    <img src="images\com.jpg" alt="Image 1">
                    <p>Become part of a supportive community
                        where members share experiences and
                        help each other grow. Engage in forums
                        and discussion groups to seek advice,
                        share insights, and build lasting connection</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="images\criti.png" alt="Image 2">
                    <p>Sharpen your critical thinking and problem
                        -solving abilities through a variety of coding exercises. The challenges you face in our club will not only enhance your coding skills but also improve your analytical mindset.</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="images\team.jpg   " alt="Image 3">
                    <p>Take advantage of resources and guidance tailored for career development in the tech 
                        industry. From internship opportunities to on, our club .</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <img src="images\images (1).jpg" alt="Image 4">
                    <p>Become part of a supportive community
                        where members share experiences and
                        help each other grow. Engage in forums
                        and discussion groups to seek advice,
                        share insights, and build lasting connec.</p>
                </div>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <hr style="box-shadow: 20px;">
    <?php include '8_footer.php'; ?>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
        });
    </script>
    <script src="About.js"></script>
</body>
</html>