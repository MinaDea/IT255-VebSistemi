<?php
session_start();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";

$user = [];
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";


// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, 'met_hotel');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, first_name, last_name, email FROM users WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $user['id'] = $row["id"];
        $user['first_name'] = $row["first_name"];
        $user['last_name'] = $row["last_name"];
        $user['email'] = $row["email"];
    }

     $_SESSION["user"] = $user;
   
} else {
    unset($_SESSION['user']);
}
$conn->close();

header("Location: index.php");

?>