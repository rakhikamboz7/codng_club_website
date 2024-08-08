<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="2_signup.css">
    <link rel="website icon" type="png"
     href="images\5400453 - Copy-Photoroom.png-Photoroom.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&family=Petrona:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
   <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <div class="photo">
                    <img src="images\5400453 - Copy-Photoroom.png-Photoroom.png" alt="">
                </div>
                <h1>Create a Account</h1>
                <div class="social-icon">
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
                <span>Or provide us with your info!!</span>
                <input type="text" placeholder="Name"
                
                >
                <input type="email" placeholder="Email">
                <input type="text" placeholder="Phone number">
                <button>Sign Up</button>
                
            </form>
        </div>
        <div class="form-container sign-in">
            <form>
                <div class="photo">
                    <img src="images\5400453 - Copy-Photoroom.png-Photoroom.png" alt="">
                </div>
                <h1>Sign In</h1>
                <div class="social-icon">
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
                <span>Or use your email for Login!!!</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="password">
                <a href="#">Forget your password ?</a>
                <button>Sign In</button>
                
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Already a member ?</h1>
                    <p>Back for more? Let's dive back into the action!!!</p>
                    <button class="hidden" id="Login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>New to the community ?</h1>
                    <p>Welcome to the community where stories unfold...</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="3_Signup.js"></script>
</body>
</html>
