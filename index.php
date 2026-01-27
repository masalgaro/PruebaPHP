<!DOCTYPE html>
<html>
<head>
    <title>Aprendiendo PHP</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
    <h1>Nombres</h1>
    <br><br>
    <br><br>
    <div class="formNombre">
        <h2>Ingresar Nombre</h2>
        <form action="insert.php" method="post">
            <label for="nombre">Nombre:</label><br><br>
            <input required type="text" id="nombre" name="nombre"><br><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="tableNombres">
        <h2>Nombres Registrados</h2>
        <table class="header">
            <thead>
                <tr>
                    <td>Nombre</td>
                    <td>ID</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $server = mysqli_connect("localhost", "root", "", "aprender");
                    if ($server->connect_error) {
                        die("Fallo de conexión: ". $server->connect_error);
                    }
                    
                    $retrieveData = "SELECT * FROM nombre";
                    $result = mysqli_query($server, $retrieveData);
                    if (!$result) {
                        die("Error de consulta: " . $server->error);
                    }

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["nombreUsuario"] . "</td>
                            <td>" . $row["ID"] . "</td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>