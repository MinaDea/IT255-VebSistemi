<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";



$firstname = isset($_POST["first_name"]) ? $_POST["first_name"] : "";
$lastname = isset($_POST["last_name"]) ? $_POST["last_name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, 'met_hotel');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, first_name, last_name, email FROM users WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 0) {
   $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";
   $conn->query($sql);
   $conn->close();
	header("Location: index.php");

} else {
	echo "User exist! <a href='index.php'>Go to index</a>";
}

?>
