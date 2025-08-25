<?php
require_once "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre      = trim($_POST["nombre"]);
    $apellido    = trim($_POST["apellido"]);
    $telefono    = trim($_POST["telefono"]);
    $email       = trim($_POST["email"]);
    $contrasenia = trim($_POST["contrasenia"]);
    $dni         = trim($_POST["dni"]);

    if (
        $nombre !== "" &&
        $apellido !== "" &&
        $telefono !== "" &&
        $email !== "" &&
        $contrasenia !== "" &&
        $dni !== ""
    ) {
        // Aquí podrías encriptar la contraseña si deseas:
        // $hash = password_hash($contrasenia, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO alumnos (nombre, apellido, telefono, email, contrasenia, dni) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nombre, $apellido, $telefono, $email, $contrasenia, $dni);

        if ($stmt->execute()) {
            echo "Registro guardado con éxito.";
        } else {
            echo "Error al guardar: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Completa todos los campos.";
    }
}

$conn->close();
?>
