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

$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Matric Number: " . $row["matric_number"].','. " First Name: " . $row["first_name"].','. " Last Name: " . $row["last_name"].','. " Department: ". $row["department"]."<br>";
  }
} else {
  echo "0 results";
}
mysqli_close($conn);

?>