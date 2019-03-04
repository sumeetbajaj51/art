<?php
$mysqli = new mysqli("localhost", "root", "", "artneticmedia");
    // Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
// Fetching Values From URL

$email = $_POST['email1'];




if (isset($_POST['email1'])) {
$sql = "INSERT INTO newsletter_subscriber (email)
VALUES ('$email')";

if ($mysqli->query($sql) === TRUE) {
    echo "Thank you for subscriber";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}
die;
}
?>