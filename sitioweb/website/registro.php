<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "test_db";

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Insertar los datos en la tabla
$sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Datos guardados con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
