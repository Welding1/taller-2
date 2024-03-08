<?php
// Aquí se realizaría la conexión a la base de datos y se procesaría el formulario

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $productName = $_POST["product_name"];
    $price = $_POST["price"];

    // Realizar la inserción en la base de datos
    // (Aquí deberías tener código para conectarte a tu base de datos y ejecutar la consulta INSERT)

    // Ejemplo usando MySQLi
    $conn = new mysqli("localhost:500", "root", "", "proyecto");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO productos (nombre, precio) VALUES ('$productName', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "Producto agregado exitosamente";
    } else {
        echo "Error al agregar producto: " . $conn->error;
    }

    $conn->close();
}
?>
