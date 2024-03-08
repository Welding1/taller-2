
<?php
// Aquí se realizaría la conexión a la base de datos y se procesaría el formulario
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Se recomienda almacenar contraseñas de manera segura
    $email = $_POST["email"];
    
    $servidor = "localhost:500";
    $usuario_db = "root";
    $contraseña_db = "";
    $nombre_db = "proyecto";
    // Realizar la inserción en la base de datos
    // (Aquí deberías tener código para conectarte a tu base de datos y ejecutar la consulta INSERT)

    
    $conn = new mysqli($servidor, $usuario_db, $contraseña_db, $nombre_db);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO usuarios (username, password, email) VALUES ('$username', '$password', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Usuario registrado exitosamente";
    } else {
        echo "Error al registrar usuario: " . $conn->error;
    }

    $conn->close();
}
?>

