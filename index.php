<!DOCTYPE html>
<html>
<head>
    <title>Aprendiendo PHP</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
    <h1 style="align-self: center;">Ingresa tu nombre</h1>
    <form action="insert.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input required type="text" id="nombre" name="nombre"><br>
        <input type="submit" value="Submit">
    </form>
    <br>
</body>
</html>