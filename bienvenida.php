<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
</head>
<body>
    <h2>Hola, <?php echo $_SESSION['usuario']; ?>. Bienvenido al sistema.</h2>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
