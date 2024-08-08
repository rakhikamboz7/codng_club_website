<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Club</title>
    <link rel="stylesheet" href="5_Home.css">
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
                    <li><a href="9_practice.php">Practice</a></li>
                    <li><a href="10_services.php">Services</a></li>
                    <li><a href="13_tutorials.php">Tutorials</a></li>
                    <li><a href="#">Hackathon</a></li>
                </ul>
            </nav>
            <div class="toggle-theme">
                <input type="checkbox" id="theme-toggle">
                <label for="theme-toggle"></label>
            </div>
            <div class="login-button">
                <a href="1_signup.php
                ">Login/Sign Up</a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero-section">
            <div class="hero-image">
                <div id="frame">
                    <input type="radio" name="frame" id="frame1" checked />
                    <input type="radio" name="frame" id="frame2" />
                    <input type="radio" name="frame" id="frame3" />
                    <input type="radio" name="frame" id="frame4" />
                    <div id="slides">
                        <div id="overflow">
                            <div class="inner">
                                <div class="frame frame_1">
                                    <div class="frame-content">
                                        <img src=" images\4578854-etudier-en-classe-avec-laptop-in-flat-design-gratuit-vectoriel.jpg" alt="Coding Illustration">
                                    </div>
                                </div>
                                <div class="frame frame_2">
                                    <div class="frame-content">
                                        <img src="images\5-ways-to-incorporate-coding-into-your-classroom.png" alt="Another Image">
                                    </div>
                                </div>
                                <div class="frame frame_3">
                                    <div class="frame-content">
                                        <img src="images\software-development-and-programming-code-on-computer-illustration-for-technology-engineer-team-coding-marketing-material-business-and-presentation-vector.jpg" alt="Yet Another Image">
                                    </div>
                                </div>
                                <div class="frame frame_4">
                                    <div class="frame-content">
                                       <img src="images\preview (1).jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="controls">
                        <label for="frame1"></label>
                        <label for="frame2"></label>
                        <label for="frame3"></label>
                        <label for="frame4"></label>
                    </div>
                    <div id="bullets">
                        <label for="frame1"></label>
                        <label for="frame2"></label>
                        <label for="frame3"></label>
                        <label for="frame4"></label>
                    </div>
                </div>    
            </div>
            <div class="hero-content">
                <h1>Code. Create. Conquer</h1>
                <p>Joining a coding club is crucial for individuals. Beyond career benefits, coding clubs create a supportive community, promoting a sense of belonging, mentorship, and personal development.</p>
                <div class="search-bar">
                    <input type="text" placeholder="Ask your doubt...">
                </div>
            </div>
        </section>
        <hr>
        <div class="container">
            <div class="left">
                <h1 class="Codingp">Explore the coding palette</h1>
                <p>Programming languages are diverse keys to digital realms: Python for versatility, JavaScript for dynamic web content, Java for enterprises, C++ for efficiency, C# for Windows, Ruby for elegance, PHP for servers, Swift for Apple, Go for simplicity, and SQL for databases. Each language, a specialized tool, empowers developers to unlock distinct possibilities, reflecting the varied needs of technology domains.</p>
            </div>
            <div class="right">
                <div class="button-container">
                    <div class="button-row">
                        <div class="button-container1">
                            <a href="#">HTML</a>
                        </div>
                        <div class="button-container2"><a href="#">CSS</a></div>
                        <div class="button-container3"><a href="#">PHP</a></div>
                        <div class="button-container4"><a href="#">C#</a></div>
                        <div class="button-container5"><a href="#">C++</a></div>
                    </div>
                    <div class="button-row">
                        <div class="button-container6"><a href="#">SQL</a></div>
                        <div class="button-container7"><a href="#">JavaScript</a></div>
                        <div class="button-container8"><a href="#">GO</a></div>
                        <div class="button-container9"><a href="#">Phython</a></div>
                        <div class="button-container10"><a href="#">DSA</a></div>
                    </div>
                    <div class="button-row">
                        <div class="button-container11"><a href="#">Java</a></div>
                        <div class="button-container12"><a href="#">C</a></div>
                        <div class="button-container13"><a href="#">Excel</a></div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <hr>
    <?php include '8_footer.php'; ?>
    <script src="6_Home.js"></script>
</body>
</html>
