<?php
$host = 'mysql';
$user = 'user';
$password = 'password';
$database = 'db1';

// Corrección #1: La variable debe llamarse $conn, no $Conn (mayúscula).
$conn = new mysqli($host, $user, $password, $database);

// Corrección #2: El método es connect_error, no connect_error().
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!"; // Corrección #3: Se utiliza un punto para concatenar cadenas en PHP.
$conn->close();
?>

<h1>Hola mundo</h1>