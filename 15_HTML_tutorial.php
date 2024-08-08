<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Html Tutorial Page</title>
  <link rel="icon" type="image/x-icon" href="images/favicon (1).ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="global.css">

  <!-- <link rel="stylesheet" href="tutorials.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.css">

 
  <link href ="https:api.fontshare.com/v2css?f[]=general-sans@500,600,400,700&display=swap" rel="stylesheet"/>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;1,600&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin Slab:wght@700&display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,700;0,800;1,600&display=swap" />
 <style>
  

* {
  font-size: 16px;
  font-family: "jost";
}
:root {
  --clr-dark: #070a13;
  --clr-light: #f1f5f9;
}
.dark-theme{
  --clr-dark: #fff;
  --clr-light: #121212;
}

body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}
      
.content {
        background-color: white;
        font-weight: bolder;
        color: #0a4283;
        margin: 10px;
        padding: 25px;
        box-shadow: grey 5px 8px 5px;
        border-radius: 10px 10px 10px 10px;
      }

.container {
  margin-top: 50px;
  display: flex;
  height: 100vh;
}
.run-button button{
  position: relative;
  margin-left:10px;
  padding: 5px 10px;
  border-radius: var(--br-3xs);
  background-color:#3f6cce;
          color: rgb(235, 235, 247);
         
          cursor: pointer;
          z-index: 499;
          

}
.sidebar {
  margin-top: 10px;
  background-color:#293f7e;
  text-align: center;
  width: 200px;
  height: 600px;
  overflow-y: scroll;
  padding-top: 10px;
  padding-bottom: 10px;
}
.sidebar a{
  color: #e4e7eb;
  align-items: center;
  text-decoration: none;
  text-align: center;
}

.content {
  flex: 1;
  padding: 5px;
  text-align: justify;
  overflow-y: auto;
}
#topic-content{
  align-content:justify;
}




body {
    margin: 0;
    overflow-x: hidden;
}

.reference-container {
    width: 1240px;
    height: 310px;
    display: inline-flex;
    flex-direction: row;
    margin-top:60px;
    -webkit-overflow-scrolling: touch;
    padding-bottom: -310px; /*Adjust spacing between items */
    overflow-x: scroll;
    overflow-y: hidden; /* Enable horizontal scrolling */
}
.topic-link{
  color: #f1f5f9;
  text-align: left;
  text-align: start;
  
}



iframe {
    width: 300px; /* Adjust the width of the iframe as needed */
    height: 50%; /* Adjust the height of the iframe as needed */
    padding-left: 10px;
    padding-right: 10px;
    margin-bottom:140px;
}
.b-button {
        background-color:#254394;
        padding: 10px 40px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 20px;
        transition: all 0.3s ease;
      }
.b-button:hover{
  background-color: #451194;
}      
.b-button a{
  text-decoration: none;
  color: whitesmoke;
  text-align: left;

}
  
.b-button a:hover {
    
        text-decoration: none;
        color:white;
      }
.section {
    height: 60vh;
    overflow: hidden;
}
p{
  color: black;
  font-size:15px; 
}
h1 {
  font-size: 20px;
  text-align: justify;

}
.CodeMirror {
      border: 1px solid #aaa;
      margin-top: 30px;
      text-align: justify;
      height: 400px; /* Set the initial height of the editor */
      width: 100%;
       }
#code-editor
{
  padding-top: 180px;
  width: 100%;
    height: 400px;
    font-family: 'Courier New', Courier, monospace;
    font-size: 12px;
    line-height: 0.5;
    padding: 0px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: inset 0 1px 3px rgba(0,0,0,0.1);
    /* white-space: pre; */
    /* overflow: auto; */
    text-align: left;
}
.write-code{ 
color:#254394;
font-style: oblique;
font-weight: 700px;
text-decoration:double;
text-align: justify; 

}

</style>
</head>

 <body>
  <div class="Html_Tutorial">
    <?php include '7_header.php'; ?>
    
            <!-- <button class="theme-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" />
        </svg>--->


  <!-- <div class="intro">This is the first step to begin with frontend. Coding Club provides
    you free content to learn front-end, back-end, c language, c++, python, java, etc.
    here the student who wish to learn front-end and back-end too, can start from learning Html.</div> -->
          
    <div class="container">
      <div class="sidebar">
        <a href="#html-intro" class="topic-link" onclick="showContent('topic1')">Html Introduction</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>

        <a href="#elements-tags" class="topic-link" onclick="showContent('topic3')">Topic 3</a><hr>
        
        <a href="#Text Formatting" class="topic-link" onclick="showContent('topic2')">Topic 4</a><hr>
        <a href="#Links-images" class="topic-link" onclick="showContent('topic2')">Topic 5</a><hr>
        <a href="#Lists-Tables" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#Forms" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#inline-block-elements" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#Templates-Frameworks" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#HTML-best-practices " class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#Responsive-Design " class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#HTML5-Features" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#meta-tags-SEO" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>
        <a href="#" class="topic-link" onclick="showContent('topic2')">Topic 2</a><hr>


              <!-- Add more topic links as needed -->
      </div>
      <div class="content" id="topic-content">
      <div class="htmlContentContainer" id="html-intro"></div>  
        
      </div>
    </div>
            
<section>

<div class="reference-container">
  <div class="referrences"><h1>Topic 1</h1><iframe width="336" height="124" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
autoplay; clipboard-write; encrypted-media; gyroscope;
picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>
<div class="referrences"><h1>Topic 2</h1><iframe width="336" height="124" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
  title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
  autoplay; clipboard-write; encrypted-media; gyroscope;
  picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
  </div>
  <div class="referrences"><h1>Topic 3</h1><iframe width="336" height="124" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
    title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
    autoplay; clipboard-write; encrypted-media; gyroscope;
    picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="referrences"><h1>Topic 4</h1><iframe width="236" height="224" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
      title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
      autoplay; clipboard-write; encrypted-media; gyroscope;
      picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
      <div class="referrences"><h1>Topic 5</h1><iframe width="336" height="124" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
        title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
        autoplay; clipboard-write; encrypted-media; gyroscope;
        picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        <div class="referrences"><h1>Topic 6</h1><iframe width="336" height="124" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
          title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
          autoplay; clipboard-write; encrypted-media; gyroscope;
          picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
          <div class="referrences"><h1>Topic 7</h1><iframe width="336" height="124" src="https://www.youtube.com/embed/BsDoLVMnmZs" 
            title="HTML Tutorial For Beginners In Hindi (With Notes) 🔥" frameborder="2" allow="accelerometer" scrolling="auto"  overflow-x: scroll; ; 
            autoplay; clipboard-write; encrypted-media; gyroscope;
            picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
     </div>
    </section><br><br>
    <div class="b-button">
    <a href="cs_tutorial.php" class="html-tutorial">Learn CSS</a>
    </div>
    <section>
    <div class="write-code"><h1>Write Your Code Below</h1></div>
  <textarea id="code-editor">
    // Enter your HTML, CSS, or JavaScript code here
  </textarea>
  <div class="run-button">
  <button onclick="runCode()">Run Code</button></div>
  <div id="output-banner"></div>
  <iframe id="output-frame" style="width: 100%; height: 200px; border: 1px solid #aaa;"></iframe>
  <section><br>
  <?php include '8_footer.php'; ?>
  <!-- Add CodeMirror script and necessary language modes (HTML, CSS, JavaScript) -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/htmlmixed/htmlmixed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/css/css.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.62.0/mode/javascript/javascript.min.js"></script>

  <script>
    var codeEditor = CodeMirror.fromTextArea(document.getElementById("code-editor"), {
      mode: "htmlmixed",
      lineNumbers: true,
      theme:"drakula", // You can replace "default" with other themes
    });

    function runCode() {
      var code = codeEditor.getValue();
      try {
        var iframe = document.getElementById('output-frame');
        var outputFrame = iframe.contentWindow || iframe.contentDocument;
        outputFrame.document.open();
        outputFrame.document.write(code);
        outputFrame.document.close();
        document.getElementById('output-banner').innerHTML = '<strong>Correct!</strong>';
      } catch (error) {
        document.getElementById('output-banner').innerHTML = '<strong>Incorrect Code!</strong>';
      }
    }
</script>
<script src="6_toggle.js"></script> 

</body>
</html>