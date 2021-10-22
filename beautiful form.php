<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awake";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT user_name, password FROM beautiful_form";

$result = mysqli_connect($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
  echo "You're a user";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>