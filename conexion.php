<?php
// Conexión con mysqli
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "nombre_de_tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

// Conexión con PDO
$dsn = 'mysql:host=localhost;dbname=nombre_de_tu_base_de_datos';
$usuario = 'tu_usuario';
$contraseña = 'tu_contraseña';

try {
    $conn = new PDO($dsn, $usuario, $contraseña);
} catch (PDOException $e) {
    echo 'Error de conexión: ' . $e->getMessage();
}
?>