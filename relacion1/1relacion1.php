<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación1 - Hola mundo</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Hola mundo en Php</h1>
    <?php
    echo "Hola mundo. Hoy es " . date("d.m.y") . ", y son las " . date("H:i:s");
    echo "<h2>Hola mundo</h2>";
    echo "<p style= 'color: red;  font-family: Arial, Helvetica, sans-serif; text-align: center;'> Hola mundo</p>";
    echo "Hello<br>World";
    echo "<br>La versión de php es " . phpversion();
    echo "<br>Información de este php";
    echo phpinfo();
    ?>
</body>

</html>