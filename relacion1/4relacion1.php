<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1- Arrays</title>
    <link rel="shortcut icon" href="./playamar.png" type="image/x-icon">
</head>

<body>
    <h1>Arrays en Php</h1>
    <?php
    // para desactuvar los warnings
    // PHP es case sensitive
    // las constantes son en mayúscula (por convenio)
    // si declaro una const no debo usar $ en el nombre
    // error_reporting(E_ALL & ~E_WARNING);
    // ^^ para desactivar warnings
    const SEMANA = [
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    ];

    echo "El primer día de la semana es: ", SEMANA[0];
    echo "<br>Una semana tiene " . count(SEMANA) . " días<br>";
    // la funcón que calcula la longitud de un array es count
    echo "Todos los días de la semana son:";
    //El bucle for se construye igual que en Java
    for ($i = 0; $i < count(SEMANA); $i++) {
        echo "<br>" . SEMANA[$i];
    }
    //Construyendo una lista ordenada con el array
    echo "<br>Los días de la semana en orden son:<ol>";
    for ($i = 0; $i < count(SEMANA); $i++) {
        echo "<li>", SEMANA[$i], "</li>";
    }
    echo "</ol>";
    ?>
</body>

</html>