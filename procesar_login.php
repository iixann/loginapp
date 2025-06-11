<?php
session_start();
include("conexion.php");

$usuario = $_POST['usuario'];
$password = $_POST['password'];
$hash = hash('sha256', $password);

$sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $hash);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $_SESSION['usuario'] = $usuario;
    header("Location: bienvenida.php");
} else {
    header("Location: login.php?error=1");
}

$stmt->close();
$conn->close();
?>
