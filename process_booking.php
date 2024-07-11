<?php
// Establish connection to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus_booking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$seats = $_POST['seats'];

// SQL query to insert data into database
$sql = "INSERT INTO bus_booking (name, email, travel_date, seats)
        VALUES ('$name', '$email', '$date', '$seats')";

if ($conn->query($sql) === TRUE) {
    echo "Booking successfully submitted!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
