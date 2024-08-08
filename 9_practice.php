<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coding Club Practice Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

header {
     background: linear-gradient(to bottom, #4d87f3, #e7e6f7a8);;
    color: #fff;
    padding: 20px;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 15px;
}

nav ul li a {
    color: #0a4283;
    text-decoration: none;
}

main {
    padding: 20px;
}

section {
    margin-bottom: 40px;
    color: #0a4283;
}

.content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

}

pre {
    background-color: black;
    color:white;
    padding: 10px;
    border-radius: 4px;
    overflow-x: auto;
}

button {
    background-color: #007BFF;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}
.header-logo-icon {
  position: relative;
  top: -45px;
  right:150px;
  width: 80px;
  height: 80px;
  padding: 0px 0px;
  border-radius: 50%;
  z-index: 999;
}
:root {
  --clr-dark: #070a13;
  --clr-light: #f1f5f9;
}
.dark-theme{
  --clr-dark: #fff;
  --clr-light: #121212;
}

#icon{
    margin-top:0px;
    width:25px;
  cursor:pointer;
  margin-left:1200px;

}
  body {
        background-color: var(--clr-light);
        color: var(--clr-dark);
    
      
        font-family: 'Inter', sans-serif;
        margin: 0;
        padding: 0;
      }


    </style>
</head>
<body>
    <header>
        <h1>Elevate Your Code, Elevate Yourself</h1>
        <nav>
            <ul>
            <img class="header-logo-icon" loading="lazy" src="images/logoo.png" alt="Logo">

                <li><a href="#15_Html_tutorial.php">HTML</a></li>
                <li><a href="#16_cs_tutorial.php">CSS</a></li>
                <li><a href="#javascript">JavaScript</a></li>
                <li><a href="#php">PHP</a></li>
                <li><a href="#mysql">MySQL</a></li>
                <li><a href="#mongodb">MongoDB</a></li>
                <li><a href="#python">Python</a></li>
                <li><a href="#c">C</a></li>
                <li><a href="#cpp">C++</a></li>
                <li><a href="#java">Java</a></li>
                <li><a href="#datastructures">Data Structures</a></li>
                <img src="images/moon-removebg-preview.png" id="icon">
            </ul>
        </nav>
 
    </header>

    <main>
        <section id="html">
            <h2>HTML</h2>
            <div class="content">
                <p>Learn the basics of HTML, the foundation of web development.</p>
                <pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;HTML Practice&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, HTML!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
                <button onclick="showExercise('html')">Try it out</button>
            </div>
        </section>

        <section id="css">
            <h2>CSS</h2>
            <div class="content">
                <p>Style your HTML pages with CSS.</p>
                <pre><code>body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}

h1 {
    color: #333;
}</code></pre>
                <button onclick="showExercise('css')">Try it out</button>
            </div>
        </section>

        <section id="javascript">
            <h2>JavaScript</h2>
            <div class="content">
                <p>Add interactivity to your web pages with JavaScript.</p>
                <pre><code>&lt;script&gt;
document.getElementById('myButton').addEventListener('click', function() {
    alert('Button clicked!');
});
&lt;/script&gt;</code></pre>
                <button onclick="showExercise('javascript')">Try it out</button>
            </div>
        </section>

        <section id="php">
            <h2>PHP</h2>
            <div class="content">
                <p>Learn server-side scripting with PHP.</p>
                <pre><code>&lt;?php
echo "Hello, PHP!";
?&gt;</code></pre>
                <button onclick="showExercise('php')">Try it out</button>
            </div>
        </section>

        <section id="mysql">
            <h2>MySQL</h2>
            <div class="content">
                <p>Manage your databases with MySQL.</p>
                <pre><code>CREATE DATABASE my_database;
USE my_database;
CREATE TABLE users (
    id INT AUTO_INCREMENT,
    username VARCHAR(50),
    password VARCHAR(50),
    PRIMARY KEY (id)
);</code></pre>
                <button onclick="showExercise('mysql')">Try it out</button>
            </div>
        </section>

        <section id="mongodb">
            <h2>MongoDB</h2>
            <div class="content">
                <p>Learn NoSQL with MongoDB.</p>
                <pre><code>use myDatabase;
db.createCollection("users");
db.users.insertOne({ "username": "user1", "password": "pass1" });</code></pre>
                <button onclick="showExercise('mongodb')">Try it out</button>
            </div>
        </section>

        <section id="python">
            <h2>Python</h2>
            <div class="content">
                <p>Learn Python, a powerful programming language.</p>
                <pre><code>print("Hello, Python!")</code></pre>
                <button onclick="showExercise('python')">Try it out</button>
            </div>
        </section>

        <section id="c">
            <h2>C</h2>
            <div class="content">
                <p>Learn the C programming language.</p>
                <pre><code>#include &lt;stdio.h&gt;

int main() {
    printf("Hello, C!\n");
    return 0;
}</code></pre>
                <button onclick="showExercise('c')">Try it out</button>
            </div>
        </section>

        <section id="cpp">
            <h2>C++</h2>
            <div class="content">
                <p>Learn C++, an extension of C.</p>
                <pre><code>#include &lt;iostream&gt;

int main() {
    std::cout << "Hello, C++!" << std::endl;
    return 0;
}</code></pre>
                <button onclick="showExercise('cpp')">Try it out</button>
            </div>
        </section>

        <section id="java">
            <h2>Java</h2>
            <div class="content">
                <p>Learn Java, a versatile programming language.</p>
                <pre><code>public class HelloWorld {
    public static void main(String[] args) {
        System.out.println("Hello, Java!");
    }
}</code></pre>
                <button onclick="showExercise('java')">Try it out</button>
            </div>
        </section>

        <section id="datastructures">
            <h2>Data Structures</h2>
            <div class="content">
                <p>Learn about data structures and algorithms.</p>
                <pre><code>class Node {
    int data;
    Node next;

    Node(int d) { data = d; next = null; }
}

public class LinkedList {
    Node head;

    public void append(int new_data) {
        Node new_node = new Node(new_data);
        if (head == null) {
            head = new_node;
            return;
        }
        Node last = head;
        while (last.next != null) {
            last = last.next;
        }
        last.next = new_node;
    }
}</code></pre>
                <button onclick="showExercise('datastructures')">Try it out</button>
            </div>
        </section>

        <section id="other">
            <h2>Other Languages</h2>
            <div class="content">
                <p>Explore other programming languages and tools.</p>
            
                <button onclick="showExercise('other')">Try it out</button>
            </div>
        </section>

    </main>
    <br>
    <?php include '8_footer.php'; ?>
    <script src="6_toggle.js"></script>
   
    <script>
        function showExercise(language) {
            alert('Exercise for ' + language + ' will be displayed here.');
            // You can expand this function to load specific exercises dynamically
        }
    </script>
</body>
</html>

