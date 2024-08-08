<head><style>
    .footer-container {
    background-color: #242633;
    border-radius: 20px 20px 0 0;
    padding-bottom: 30px;
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align items to the right side */
}

.footer-logo {
    margin-top: 20px; /* Adjust margin as needed */
}

.footer-logo img {
    width: 80px; /* Adjust width as needed */
    height: auto; /* Maintain aspect ratio */
    border-radius: 50%; /* Rounded border */
}

.footer-columns {
    display: flex;
    justify-content: space-between; /* Spacing between items */
    width: 100%; /* Adjust width as needed */
    margin-right: 5px; /* Reduce margin for spacing */
}

.footer-column {
    margin-left: 21px; /* Reduce margin between columns */
}

.footer-image img {
    margin-right: 100px; /* Adjust margin to move illustration slightly to the right */
    margin-top: -100px; /* Move the image upward */
    max-width: 100%;
    height: auto; /* Maintain aspect ratio */
    display: block; /* Ensure the image is displayed as a block element */
}


.footer-column h3 {
    margin-top: 30px;
    color: white; /* Text color */
    font-weight: bold;
    text-align: left;


  /* Bold font */
}

.footer-column ul {
    list-style: none; /* Remove bullet points */
    padding: 10;
    text-align: left;
    margin-left:10px;
    margin-top: 20px; /* Remove default padding */
}

.footer-column ul li {
    margin-bottom: 5px; /* Adjust spacing between list items */
}

.footer-column ul li a {
    color: white; /* Link text color */
    text-decoration: none; /* Remove underline */
}

.footer-column ul li a:hover {
    text-decoration: underline; /* Add underline on hover */
}
.social-icons{
    margin: 20px 0;
}
.social-icons a{
    text-decoration: none;
   border: 1px solid #c9c7c7;
   border-radius: 20%;
   display: inline-flex;
   justify-content: center;
   align-items: center;
   margin: 0 3px;
   width: 40px;
   height: 40px;
}
.social-icons a i {
   font-size: 20px; 
   transition: font-size 0.3s;
   color:  #ffffff; 
}
.social-icons a:hover i{
   color:#c7a0f3 ;
   font-size: 25px;

}
.about-button,
.contact-button {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 8px 20px;
        background-color: #8a3ab9;
        border-radius: 20px;
        transition: background-color 0.3s;
    }
    
    .about-button:hover,
.contact-button:hover {
        background-color:#3f2079;
}
footer{
    margin-top:50px;
    font-family: 'Inter', sans-serif;
}

</style>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="images\white.jpg" alt="Logo">
        </div>
        <div class="footer-columns">
            <div class="footer-column">
                <h3>Top Tutorials</h3>
                <ul>
                    <li><a href="#Html_tutorial.php">HTML Tutorials</a></li>
                    <li><a href="#cs_tutorial.php">CSS Tutorials</a></li>
                    <li><a href="#">JavaScript Tutorials</a></li>
                    <li><a href="#">Python Tutorials</a></li>
                    <li><a href="#">C Language Tutorials</a></li>
                    <li><a href="#">SQL Tutorials</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Top References</h3>
                <ul>
                    <li><a href="#">HTML Reference</a></li>
                    <li><a href="#">CSS Reference</a></li>
                    <li><a href="#">JavaScript Reference</a></li>
                    <li><a href="#">Python Reference</a></li>
                    <li><a href="#">C Language Reference</a></li>
                    <li><a href="#">SQL Reference</a></li>
                </ul>
            </div>
            <div class="footer-column social-media">
                <h3>Follow Us</h3>
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
                <div class="footer-buttons">
                    <a href="About.php" class="about-button">About Us</a>
                    <a href="Contact.php" class="contact-button">Contact Us</a>
                </div>
            </div>
            <div class="footer-image">
                <img src="images\9a68716efc331fcc84e3a4ce5f23d18d-removebg-preview.png" alt="Tutorial Illustration">
            </div>
        </div>
    </div>
</footer>
