<head><style>
   :root {
  --clr-dark: #070a13;
  --clr-light: #f1f5f9;
}
.dark-theme{
  --clr-dark: #fff;
  --clr-light: #121212;
}


  body {
        background-color: var(--clr-light);
        color: var(--clr-dark);
        text-align: center;
        
        font-family: jost;
        margin: 0;
        padding: 0;
      }

.header-section {
  position: absolute;
  top: 0;
  left: 0;
  display:flex;
  width: 100%;
  height: 80px;
  border-radius: 0 0 var(--br-481xl) var(--br-xl);
  background: linear-gradient(to bottom, #4d87f3, #e7e6f7a8);
  z-index: 999;
}

.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 80px;
  padding: 0 20px;
  max-width: 100%;
  margin: 0 auto;
}

.header-logo-icon {
  position: relative;
  width: 50px;
  height: 50px;
  padding: 0px 0px;
  border-radius: 50%;
  z-index: 999;
}


.loginbox-parent {
  position:absolute;
  top: 4px;
  right: -190px;
  border-radius: var(--br-3xs);
  background-color: var(--color-cornflowerblue);
  color: var(--clr-light);
  text-align: center;
  cursor: pointer;
  z-index: 999;
}


.loginbox-parent .login {
  padding: 6px 10px;
  margin-top: auto;

}


       
.loginbox .i{
 text-decoration: none;
}


.menu  {
  position: relative;
  display: inline-block;
  margin: 15px 242px;
  padding-left:350px;
  list-style-type: none;
  font-size: 18px;
  z-index:999;
  }
  nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
    padding: 12px;
  }
  .nav{
    /* margin-top :10px; */
    /* padding: 10; */
    list-style: none; 
    display: flex;
}
.nav li{
  margin-right: 15px;
  
 }
.nav li a{
    color: var(--clr-dark);
    justify-content: space-between;
}

.menu .nav li a {
  margin-top: 100px;
  text-decoration: none;
  color:#0a4283 ; 
}

.menu .nav li a:hover {
  color: var(--clr-light);
}

*{
  margin:0;
  padding:0;
}
#icon{
  width:25px;
  cursor:pointer;
  position:absolute;
  bottom:15px;
  left:730px;
  /* background-color:  rgba(106, 150, 233, 0.51) 77.17%; */

}



    </style>
  </head>
  <header class="header">
    <div class="header-section">
      <!-- Add any content specific to the header section -->
    </div>
    <img class="header-logo-icon" loading="lazy" src="images/logoo.png" alt="Logo">
    <!-- Navigation Menu -->
    <div class="menu">
      <nav>
      <ul class="nav">
        <li><a href="practice.php">Practice</a></li>
        <li><a href="tutorials.php">Tutorials</a></li>
        <li><a href="Services.html">Services</a></li>
        <li><a href="hackathon.html">Hackathon</a></li>
        <!-- ...More navigation links... -->
      </ul>
      </nav>
      <!-- User Profile and Theme Toggler -->
       <button class="loginbox-parent">
        <div class="login">
       
          <a href="18_profile.php" class="user">
            <i class="fa fa-user icon"></i>RakhiKomal
          </a></div>
          </button>
      

      <img src="images/moon-removebg-preview.png" id="icon">
    </div>
  </header>


