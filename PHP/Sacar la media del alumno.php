<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Notas</title>
</head>
<body>

    <h1>Registro de Calificaciones</h1>

    <form method="POST">
        
        <p>
            <label for="alumno">Nombre del Alumno:</label><br>
            <input type="text" name="alumno" required>
        </p>

        <hr>

        <p>
            <label>Nota Ejercicio 1:</label><br>
            <input type="number" name="nota1" step="0.01" min="0" max="10" required>
        </p>

        <p>
            <label>Nota Ejercicio 2:</label><br>
            <input type="number" name="nota2" step="0.01" min="0" max="10" required>
        </p>

        <p>
            <label>Nota Ejercicio 3:</label><br>
            <input type="number" name="nota3" step="0.01" min="0" max="10" required>
        </p>

        <input type="submit" value="Calcular Promedio">

    </form>

    <?php 
    // Lo mismo de siempre, comprobamos si nos envían los datos
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // recogemoss los datos usando el array $_POST
        $nombre = $_POST["alumno"];
        $nota1 = $_POST["nota1"] ?? 0;
        $nota2 = $_POST["nota2"] ?? 0;
        $nota3 = $_POST["nota3"] ?? 0;
        
        // Aca calculamos la media de las notas
        $resultado = ($nota1 + $nota2 + $nota3) / 3;
        
        // agarramos la notas y mostramos los mensajes que se nos pide
        if ($resultado < 5) {
            echo "<h3 style='color:red'>Lo siento, $nombre, estas suspendido.</h3>";
        } elseif ($resultado >5 && $resultado < 6) {
            echo "<h3 style='color:orange'>Bien, $nombre, estas aprobado.</h3>";
        } elseif ($resultado >6 && $resultado < 7) {
            echo "<h3 style='color:green'>Perfecto $nombre, tienes un bien</h3>";
        } elseif ($resultado >7 && $resultado < 9) {
            echo "<h3 style='color:blue'>Fenomenal $nombre, tienes un notable</h3>";
        } elseif ($resultado >9) {
            echo "<h3 style='color:purple'>Enhorabuena $nombre, sobresaliente</h3>";
        }
    } 
    ?>

</body>
</html>