<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aprender";

    $connection = mysqli_connect($servername, $username, $password, $dbname);
    if ($connection->connect_error) {
        die("Error de Conexión". $connection->connect_error);
    }

    $nombre = mysqli_real_escape_string($connection, $_POST["nombre"]);
    $sql = "INSERT INTO nombre (nombreUsuario) VALUES ('$nombre')";
    if ($connection->query($sql) === TRUE) {
        echo "Datos agregados con éxito.";
    } else {
        echo "Error: " . $sql . "<br> " . $connection->error;
    }

    $connection->close();
?>
