<?php 
include 'index.php';

$nome = $email = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = test_input($_POST["nome"]);
    $email = test_input($_POST["email"]);
    $senha = test_input($_POST["senha"]);
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


$sql = "INSERT INTO usuarios (Nome, Email, Senha)
VALUES ('$nome', '$email', '$senha')";

$result=$conn->query($sql);

if ($conn->query($sql) === TRUE) { 
  session_start();
  header("Location: ./paginausuario.php");
  exit();
} else { 
  echo "Erro: " . $sql . "<br>" . $conn->error;
}


$conn->close();














?>