<?php
session_start();
// If user is already logged in, redirect to home page
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
header("Location: booking.html");
exit;
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Check username and password against database
$userID = $_POST['userID'];
$password = $_POST['password'];
$sql = "SELECT * FROM Student WHERE userID='$userID' AND
password='$password'";
$result = $conn->query($sql);
if($result->num_rows > 0){
$_SESSION['loggedin'] = true;
header("Location: booking.html");
exit;
} else {
echo "Invalid username or password";
}
$conn->close();
}
?>