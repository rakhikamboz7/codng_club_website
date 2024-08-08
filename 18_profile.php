<?php
include "18_config.php";

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
   <title>Typing Speed Tester</title>
  <link rel="icon" type="image/x-icon" href="images/favicon (1).ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="style.css">
  
  <link href ="https:api.fontshare.com/v2css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Slab:wght@700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;0,800;1,600&display=swap" />
<style>
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
      
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
}
.parent-container {
  display: flex;             /* Enable flexbox for two-column layout */
  width: 85%;               /* Adjust container width as needed */
  margin: 0 auto;
  margin-top: 60px;          /* Center the container on the page */
}

.left-column {
  background: linear-gradient(to bottom, #5d97f3, #f3f3f3,#5d97f3);
  width: 30%;               /* Adjust left column width */
  padding: 40px;
  padding-bottom: 140px;
  border-radius: 20px;
  border-right: 1px solid #ccc; /* Add a separator between columns */
}
.profile-image img{
  border-radius: 120px;
}
.right-column {
  width: 70%;               /* Adjust right column width */
  padding: 10px;
}

/* Style the inputs, select elements, and textareas */
input[type=text], input[type=email], input[type=tel], textarea, select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 7px 7px 10px;
  display: inline;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.form-container {
  border-radius: 5px;
  background-color:rgba(50, 130, 252, 0.68);
  padding: 20px;
  float: right;
  width: 70%;
}

/* Floating column for labels: 25% width */
.name {
  float: left;
  width: 25%;
  font-size: 13px;
  text-align: justify;
  margin-top: 6px;
  margin-right: 5px;
}

/* Floating column for inputs: 75% width */
.placeholder {
  display: inline-block;
  float: right;
  leftt: 150px;
  width: 70%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .name, .placeholder, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
#userDetails{
  text-align: justify;

}




</style>
</head>
<body>
<div class="profile-page">
  <?php include '7_header.php'; ?>
  <div class="parent-container">
    <div class="left-column">
    <div class="profile-image">
    <div class="row">
  <div class="name">
    <label for="profileImage">Profile Image</label>
  </div>
  <div class="placeholder">
    <input type="file" id="profileImage" name="profileImage" accept="image">
  </div>
</div>

      <img src="images/profile.png" alt="Profile Image"></div>
      <div id="userDetails"></div>
      <div class="transparent-container2">
        <!-- Additional content for the transparent container -->
      </div> 
    </div>
    <div class="right-column">
    <div class="form-container">
  <form>
    
      <div class="row">
      <div class="name">
        <label for="fname">First Name</label>
      </div>
      <div class="placeholder">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div><br>
    <div class="row">
      <div class="name">
        <label for="lname">Last Name</label>
      </div>
      <div class="placeholder">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div><br>
    <div class="row">
      <div class="name">
        <label for="email">Email</label>
      </div>
      <div class="placeholder">
        <input type="email" id="email" name="email" placeholder="Your email..">
      </div>
    </div><br>
    <div class="row">
      <div class="name">
        <label for="mobile">Mobile Number</label>
      </div>
      <div class="placeholder">
        <input type="tel" id="mobile" name="mobile" placeholder="Your mobile number..">
      </div>
    </div><br>
    <div class="row">
      <div class="name">
        <label for="skills">Skills</label>
      </div>
      <div class="placeholder">
      <select id="skills" name="skills">
          <option value="html">HTML</option>
          <option value="csas">CSS</option>
          <option value="php">PHP</option>
          <option value="javascript">Javascript</option>
          <option value="c lang">C language</option>
          <option value="java">Java</option>
          <option value="cpp">C++</option>
          
        </select>
      </div><br><br><br>
     
    <div class="row">
      <input type="submit" value="Submit" onclick="updateUserDetails()">
    </div>

  </form>
</div>

</div>

      </div>
    </div><br><br>
    <?php include '8_footer.php'; ?>
<script>
function updateUserDetails(event) {
  event.preventDefault(); // Prevent form from submitting to a new page

  // Get the input field values
  const firstName = document.getElementById('fname').value;
  const lastName = document.getElementById('lname').value;
  const email = document.getElementById('email').value;
  const mobile = document.getElementById('mobile').value;
  const skills = document.getElementById('skills').value; 

  // Construct the user details HTML content
  const userDetailsHTML = `
   
    <p><strong>First Name:</strong> ${firstName}</p>
    <p><strong>Last Name:</strong> ${lastName}</p>
    <p><strong>Email:</strong> ${email}</p>
    <p><strong>Mobile:</strong> ${mobile}</p>
    <p><strong>Skills:</strong> ${skills}</p>
  `;

  // Update the user details section with the new content
  document.getElementById('userDetails').innerHTML = userDetailsHTML;
}

// Attach the updateUserDetails function to the form's submit event
const form = document.querySelector('form'); // Select the form element
form.addEventListener('submit', updateUserDetails);
</script>
</body></html>