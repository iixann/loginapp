<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: bienvenida.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>
    <form method="POST" action="procesar_login.php">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Ingresar">
        <p>¿No tenés cuenta? <a href="registro.php">Registrarse</a></p>

    </form>
    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red'>Usuario o contraseña incorrectos.</p>";
    }
    ?>
</body>
</html>
