<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'TASKHUB';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="INSERT INTO `play` (`task name`, `priority`, `phase`, `deadline`, `focus`) VALUES ('rrettrryuhu', 'Medium', 'On Deck', '2018-07-12', 'hgh')";
mysqli_query($conn,$sql);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to database successfully";
}
?>
