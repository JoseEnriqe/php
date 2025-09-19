<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relación 1 - Tipos de datos</title>
    <link rel="shortcut icon" href="./playamar.png" type=" image/x-icon">
</head>

<body>
    <h1>Tipos y formatos de salida</h1>
    <?php
    $verdadero = true;
    $entero = 4;
    $decimal = 0.5;
    $cadena = "Esto es un ejemplo";
    $caracter = 50;
    echo "-Bool: $verdadero<br>" . "-Int: $entero<br>" . "-Float: $decimal<br>" . "-Str: $cadena";
    echo "<br>";
    var_dump($decimal);
    //Probando formatos de salida
    printf("<br>El número $entero en binario es: %b", $entero);
    printf("<br>El valor ASCII de $caracter es: %c", $caracter);
    printf("<br>$decimal en notación científica es: %e", $decimal);
    ?>
</body>

</html>