<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FechaHost</title>
    </head>
    <body>
        <?php

        // Establecer la zona horaria predeterminada a usar
        date_default_timezone_set('America/Chihuahua');

        //Imprimimos la fecha actual dandole un formato
        echo date ("Y-m-d H:i:s");
       


        //Obtenemos el nombre del host
        echo gethostname();


        ?>
    </body>
</html> 