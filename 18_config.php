<?php
$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "coding_club";

$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

if (!$conn) {
    die("Database could not be accessed: " . mysqli_connect_error());
}

// Get user data
if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['mobile'], $_POST['address'], $_POST['skills'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $skills = mysqli_real_escape_string($conn, $_POST['skills']);

    // SQL query to insert data into the database
    $sql = "INSERT INTO student (firstname, lastname, email, mobile, address, skills) 
            VALUES ('$firstname', '$lastname', '$email', '$mobile', '$address', '$skills')";

    // Execute SQL query
    // if ($conn->query($sql) === TRUE) {
    //     // Redirect user to a thank you page or wherever you want after successful submission
    //     header("Location: home.html");
    //     exit();
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

// Close the database connection
$conn->close();
?>


