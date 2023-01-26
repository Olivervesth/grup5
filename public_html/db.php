 <?php
$servername = "172.18.0.2";
$username = "root";
$password = "secret";
$dbname = "todos";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 