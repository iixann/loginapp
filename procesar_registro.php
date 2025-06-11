<?php
include("conexion.php");

$usuario = trim($_POST['usuario']);
$password = $_POST['password'];
$confirmar = $_POST['confirmar'];

if (empty($usuario) || empty($password) || empty($confirmar)) {
    header("Location: registro.php?error=Todos los campos son obligatorios");
    exit();
}

if ($password !== $confirmar) {
    header("Location: registro.php?error=Las contraseñas no coinciden");
    exit();
}

// Revisar si el usuario ya existe
$sql = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: registro.php?error=El nombre de usuario ya está registrado");
    exit();
}

// Insertar nuevo usuario
$hash = hash('sha256', $password);
$sql = "INSERT INTO usuarios (usuario, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $usuario, $hash);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: registro.php?ok=1");
exit();
?>
