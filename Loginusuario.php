<?php 
include 'index.php';
session_start();
$email = $senha = $erro = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $email = test_input($_POST["email"]); 
  $senha = test_input($_POST["password"]); 
} 
function test_input($data) { 
  $data = trim($data); 
  $data = stripslashes($data); 
  $data = htmlspecialchars($data); 
  return $data; } 
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "serenusbancoblog";  
  $conn = new mysqli($servername, $username, $password, $dbname);  
  if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
  } if (!empty($email) && !empty($senha)) { 
    $sql = "SELECT Email, Senha FROM usuarios WHERE Email=?"; 
    $stmt = $conn->prepare($sql); 
    $stmt->bind_param("s", $email); 
    $stmt->execute(); 
    $result = $stmt->get_result(); 
    if ($result->num_rows > 0) { 
      $row = $result->fetch_assoc(); 
      if ($row['Senha'] === $senha) { 
        session_start(); 
        $_SESSION['user_name'] = $row['Nome'];
        header("Location: ./paginausuario.php"); 
        exit(); 
      } else { 
        $erro = "Senha incorreta!"; } 
      } else { $erro = "Email não encontrado!"; } 
      $stmt->close(); } 
      else { $erro = "Por favor, preencha todos os campos!"; } 
      $conn->close();