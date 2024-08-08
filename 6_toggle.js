var icon=document.getElementById("icon");
icon.onclick =function(){
  document.body.classList.toggle("dark-theme");
  if(
    document.body.classList.contains("dark-theme")){
      icon.src = "images/sun.png";
    }
    else{
      icon.src="Images/moon-removebg-preview (2).png";
    }
 
}

// topic-content
function showContent(topic) {
  const content = document.getElementById("topic-content");
  if (topic === "topic1") {
      content.innerHTML = "<h1>Topic 1 Content</h1><p>This is the content for Topic 1.</p>";
  } else if (topic === "topic2") {
      content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
  }else if (topic === "topic3") {
    content.innerHTML = "<h2>Topic 3 Content</h2><p>This is the content for Topic 3.</p>";
}else if (topic === "topic2") {
  content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
}else if (topic === "topic2") {
  content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
}else if (topic === "topic2") {
  content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
}else if (topic === "topic2") {
  content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
}else if (topic === "topic2") {
  content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
}

  // Add more conditions for additional topics
}

function showContent(topic) {
  const content = document.getElementById("topic-content");
  if (topic === "topic1") {
      content.innerHTML = "<h1>Understanding Html</h><p>HTML, which stands for HyperText Markup Language, is the foundation of every web page and an essential skill for anyone involved in web development. An HTML document is a text file containing markup tags that define the structure and content of a webpage.</p><br><h1>Basic Structure of an Html document<h1><p>An HTML document consists of a series of elements that enclose different parts of the content to make it appear or act a certain way. Let's look at a simple example of how an HTML document is structured:</p><br><plaintext><!DOCTYPE html>\n<html>\n<head>\n<title>Your Title</title>\n</head>\n<body>\n<h1>This is the heading</h1>\n</h1>\n</body></html></code>\n\n <><!DOCTYPE html> declares the document type and version of HTML being used.\n <html> is the root element of an HTML page.\n <head> contains meta-information about the document such as its title and links to stylesheets or scripts.\n <title> sets the title of the webpage (displayed in the browser's title bar or tab).\n<body> contains the visible page content.\n<h1> defines a top-level heading.\n<p> defines a paragraph."

  }
  else if (topic === "topic2") {
      content.innerHTML = "<h2>Topic 2 Content</h2><p>This is the content for Topic 2.</p>";
  }
  // Add more conditions for additional topics
}
