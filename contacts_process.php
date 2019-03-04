<?php
$mysqli = new mysqli("localhost", "root", "", "artneticmedia");
    // Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
// Fetching Values From URL
echo $name = $_POST['name1'];
$email = $_POST['email1'];
$message = $_POST['message1'];




if (isset($_POST['name1'])) {
$sql = "INSERT INTO contact_form (name, email, message)
VALUES ('$name', '$email', '$message')";

if ($mysqli->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
echo "Form Submitted succesfully";
die;
}
?>