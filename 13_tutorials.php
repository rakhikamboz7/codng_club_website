<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
  <title>Tutorials</title>
  <link rel="icon" type="image/x-icon" href="images/favicon (1).ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="14_tutorials.css">
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;0,800;1,600&display=swap" />
  <link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400&amp;display=swap">
  <style>


.some-page-wrapper {
  margin: 85px;
}

.row {
  margin-top: 60px;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 100%;
  height: fit-content;
}

.cards-container {
  margin-bottom: 299px;
  display: flex;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
}

.card {
  width: 325px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  text-align: left;
  margin-top: 150px;
}

.card img {
  width: 100%;  
  height: 200px;
  object-fit: cover;
}

.card-content {
  padding: 15px;
}

.card-content h2 {
  margin-bottom: 10px;
  font-size: 1.5em;
}

.card-content p {
  font-size: 1em;
  margin-bottom: 15px;
  margin-left: 45px;
}

.card-button {
  display: inline-block;
  padding: 10px 15px;
  background-color: #4d87f3;
  color: #fff;
  text-decoration: none;
  border-radius: 4px;
}

.card-button:hover {
  background-color: #365ecf;
}
</style>
</head>

<body>
  <div class="Tutorials">
  <?php include '7_header.php'; ?>
    <div class="some-page-wrapper">
      <div class="row">
        <div class="cont">
          <img src="images/web.jpg">
        </div>
        <div class="image-overlay">
          <h2>Learn Anytime</h2>
          <h1>Innovate EveryTime</h1>
          <div class="start-button">
            <a href="15_HTML_tutorial.php" class="html-tutorial">Get Started</a>
          </div>
        </div>
      </div>  

      <div class="cards-container">
        <div class="card">
          <img src="images/html-css-collage-concept.jpg">
          <div class="card-content">
            <h2>FrontEnd</h2>
            <p>
              The front end, or user interface, serves as the visible facade of a web application.
              It is the part through which users directly interact, encompassing design, layout, 
              and interactivity.
            </p>
            <a href="HTML.html" class="card-button">Read More..</a>
          </div>
        </div>
        <div class="card">
          <img src="images/backend.jpg">
          <div class="card-content">
            <h2>BackEnd</h2>
            <p>
              The back end of a system, often referred to as the server-side, 
              is the behind-the-scenes component responsible for managing and
              processing data, as well as performing the core functionality.
            </p>
            <a href="HTML.html" class="card-button">Read More..</a>
          </div>
        </div>
        <div class="card">
          <img src="images/data.jpg">
          <div class="card-content">
            <h2>DataBase</h2>
            <p>
              The database is a structured collection of data crucial for software applications.
              It stores and organizes information, allowing the back end to efficiently
              retrieve, update, and manage data.
            </p>
            <a href="HTML.html" class="card-button">Read More..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include '8_footer.php'; ?>
  <script src="toggle.js"></script>
</body>
</html>
