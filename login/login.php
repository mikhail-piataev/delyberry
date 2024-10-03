<?php
session_start();
$servername = "localhost";
$nombre = "tu_usuario"; 
$contraseña = "tu_contraseña"; 
$dbname = "tu_base_de_datos"; 


$conn = new mysqli($servername, $nombre, $contraseña, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$pass = $_POST['contraseña'];

// Consulta para verificar usuario
$sql = "SELECT * FROM usuarios WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $usuario);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['pass'])) {
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['usuario'] = $row['usuario'];
        header("Location: welcome.php"); // Redirige a la página de bienvenida
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Usuario no encontrado.";
}

$stmt->close();


$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<form method="POST">
    <label for="username">Usuario:</label>
    <input type="text" name="usuario" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="contraseña" required>
    <br>
    <button type="submit">Iniciar Sesión</button>
</form>
</body>
</html>