<?php 
    include 'index.php'

    $email = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["name"]);
    $senha = test_input($_POST["email"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Email, Senha FROM Usuarios WHERE Email='$email', Senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    session_start();
    header("Location: /paginausuario.html");
  }
} else {
  echo "0 results";
}
$conn->close();




?>