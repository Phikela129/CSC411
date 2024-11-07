<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "students";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$userID=$_POST['userID'];
$room_name=$_POST['room_name'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$year=$_POST['year'];
session_start(); // Start a session
// Assume the user has already logged in and their user_id is stored in session
$user_id = $_SESSION['user_id']; // This should be set during login

// Get user details
$stmt = $pdo->prepare("SELECT * FROM student WHERE userID =userID ");
$stmt->execute([$userID]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    $gender = $user['gender'];
    $year = $user['year'];

    // Determine the maximum allowed occupancy based on year
    $maxOccupancy = ($year == 4) ? 1 : 2;

    // Check available rooms for the user's gender
    $stmt = $pdo->prepare("SELECT * FROM cumpus WHERE gender = gender AND rooms > 0");
    $stmt->execute([$gender]);
    $rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($rooms as $room) {
        // Assume each room has a bookings table to keep track of current bookings
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM booking WHERE room_name = room_name");
        $stmt->execute([$room['name']]);
        $count = $stmt->fetchColumn();

        if ($count < $maxOccupancy) {
            // Book the room
            $stmt = $pdo->prepare("INSERT INTO booking (userID, room_name, gender, phone,year) VALUES ($userID, $room_name, $gender, $phone, $year)");
            $stmt->execute([$user['userID'], $room['name']]);

            // Decrease the total room count
            $stmt = $pdo->prepare("UPDATE cumpus SET total_rooms = rooms - 1 WHERE name = ?");
            $stmt->execute([$room['name']]);

            echo "Room booked successfully: " . $room['name'];
            break; // Break after booking a room
        }
    }
} else {
    echo "User not found!";
}
?>
