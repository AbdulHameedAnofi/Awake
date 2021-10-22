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

$first_name=$_POST['first_name'];
$middle_name=$_POST['middle_name'];
$last_name=$_POST['last_name'];
$phone_number=$_POST['phone_number'];
$user_name=$_POST['user_name'];
$password=crypt($_POST['password'], "md5");
$sql = "INSERT INTO beautiful_form_sign_up_table (first_name, middle_name, last_name, phone_number, user_name, password)
VALUES ('$first_name', '$middle_name', '$last_name', '$phone_number', '$user_name', '$password')";

// if ($_GET['']) {
// 	# code...
// }

if (mysqli_query($conn, $sql)) {
  echo "Account created successfully";
} else {
  echo "Error creating account: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>