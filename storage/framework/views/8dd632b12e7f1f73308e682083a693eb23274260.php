<?php
    echo "Mensaje desde php <br>";
    print_r("Segundo mensaje <br>");

    echo "Mensaje 3<br>";

    $num1 = '9';
    $num2 = 8;

    $suma = $num1+$num2;

    echo $suma."<br>";

    $nombre = "Angel";
    $saludo ="Hola";

    $saludar = $saludo."".$nombre;

    $saludar = "{$saludo}{$nombre},como estas?? <br>";
    echo $saludar;

    $edad = 21;
    if ($edad>=18)
        echo "Mayor de edad";
    else
        echo "Menor de edad";

    for($i=1;$i<5;$i++)
        echo $i."<br>";

    for ($i=1;$i<15;$i++)
        echo $i."<br>";

    $num_tabla = 2;

    for ($j=1;$j=15;$j++)
        echo $j."*2=.$num_tabla*$j"."<br>";


 ?><?php /**PATH C:\xampp\htdocs\Project_Laravel2\resources\views/test/index.blade.php ENDPATH**/ ?>