<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Alumno</title>
</head>
<body>

    <form method="POST" action="">

        <p>
            <label for="nombre">Nombre:</label><br>
            <input type="text" name="nombre" id="nombre" style="padding: 5px;">
        </p>

        <p>
            <label for="ciclo">Ciclo:</label><br>
            <input type="text" name="ciclo" id="ciclo" style="padding: 5px;">
        </p>

        <p>
            <label for="curso">Curso:</label><br>
            <input type="text" name="curso" id="curso" style="padding: 5px;">
        </p>

        <p>
            <input type="submit" value="Enviar formulario">
        </p>

    </form>

    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //Comprueba si el formulario se ha enviado usando el método POST
        
        // Acá  vamos a declarar las variables,las cuales recogen los datos enviados
        $nombre = $_POST["nombre"]; //nombre, ciclo y curso son el name del input
        $ciclo = $_POST["ciclo"];
        $curso = $_POST["curso"];

        //con el echo mostramos la frase por pantalla 
        echo "<p>Me llamo $nombre, estudio $ciclo y estoy en $curso curso</p>";
    }
    ?>

</body>
</html>