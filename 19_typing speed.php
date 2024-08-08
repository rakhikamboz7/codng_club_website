<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />
   <title>Typing Speed Tester</title>
  <link rel="icon" type="image/x-icon" href="images/favicon (1).ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="19_style.css">
  <!-- <link rel="stylesheet" href="typing.css"> -->
  
  <link href ="https:api.fontshare.com/v2css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Slab:wght@700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;0,800;1,600&display=swap" />
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <!-- how to make a header of webpage with a  -->
</head>
<body>
  <?php include '7_header.php'; ?>

      
     

    <div class="container">
      <div class="title">Welcome to the Typing Speed Challenge</div>
      <div class="border">
      <div class="header">
        
        <div class="wpm">
          <div class="head">Words/min</div>
          <div class="init_wpm">100</div>
        </div>
      
        
        <div class="errors">
          <div class="head">Errors</div>
          <div class="init_errors">0</div>
        </div>
        
        <div class="timer">
          <div class="head">Time(s)</div>
          <div class="init_time">60s</div>
        </div>
        
        <div class="accuracy">
          <div class="head">Accuracy(%)</div>
          <div class="init_accuracy">100</div>
        </div>
      </div>
      </div>
<br><br>
   <!--how to connect php to database-->
      <div class="content">
        <p>sometimes your own enemy is yourself.</p>
      </div>
     <textarea class="input_box" placeholder="Start typing..." oninput="textInput()"
      onfocus="startGame()"></textarea>
      <br>
      <button class="start" onclick="startGame()">Start</button><br>
   </div>
  </div>
  <?php include '8_footer.php'; ?>

 <script src="6_toggle.js"></script>


  </body>

</html>