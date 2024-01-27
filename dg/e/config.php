<?PHP

$adminName="Kowshique Roy";
$adminMail="kowshiqueroy@gmail.com";
$adminPhone="+8801632950179";

$websiteName="Khoriddar";



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}













?>