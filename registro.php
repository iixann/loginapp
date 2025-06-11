<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
</head>
<body>
    <h2>Crear nueva cuenta</h2>
    <form method="POST" action="procesar_registro.php">
        <label>Usuario:</label>
        <input type="text" name="usuario" required><br><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br><br>
        <label>Confirmar contraseña:</label>
        <input type="password" name="confirmar" required><br><br>
        <input type="submit" value="Registrar">
    </form>
    <p>¿Ya tenés cuenta? <a href="login.php">Iniciar sesión</a></p>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color:red'>" . htmlspecialchars($_GET['error']) . "</p>";
    }
    if (isset($_GET['ok'])) {
        echo "<p style='color:green'>Registro exitoso. Ahora podés iniciar sesión.</p>";
    }
    ?>
</body>
</html>
