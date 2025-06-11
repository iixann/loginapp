<?php
$host = "localhost";
$db = "sistema_login";
$user = "root"; // Cambiá según tu usuario
$pass = "";     // Cambiá si tenés contraseña

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
