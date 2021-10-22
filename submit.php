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

// // inserting a record *
// $fname_variable=$_POST['fname'];
// $lname_variable=$_POST['lname'];
// $sql = "INSERT INTO users (first_name, last_name)
// VALUES ('$fname_variable', '$lname_variable')";

// // Deleting a record **
// $sql = "DELETE FROM users WHERE id=3'";

$sql = "UPDATE users SET last_name='Agba' WHERE id=6";

if (mysqli_query($conn, $sql)) {
  echo "Record successfully updated";
} else {
  echo "Error updating record: " .mysqli_error($conn);
}

mysqli_close($conn);


if ()
?>