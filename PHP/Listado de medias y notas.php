<?php
$alumnos = [ //aca declaramos la lista completa, que esta dentro de $alumnos y cada linea de dentro, es un alumno individual
    ["id" => 1, "nombre" => "Ana",   "ciclo" => "ASIR", "curso" => 1, "nota" => 7],
    ["id" => 2, "nombre" => "Luis",  "ciclo" => "ASIR", "curso" => 2, "nota" => 8.5],
    ["id" => 3, "nombre" => "Marta", "ciclo" => "DAW",  "curso" => 1, "nota" => 6],
    ["id" => 4, "nombre" => "Juan",  "ciclo" => "DAW",  "curso" => 2, "nota" => 9],
    ["id" => 5, "nombre" => "Sara",  "ciclo" => "ASIR", "curso" => 1, "nota" => 5.5],
];
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ej1 - Alumnos</title></head>
<body>
<h1>Listado de alumnos</h1>

<table>
    <tr>
        <th>ID</th><th>Nombre</th><th>Ciclo</th><th>Curso</th><th>Nota</th>
    </tr>
    <?php
    $sumaNotas = 0; //declaramos el contador
    foreach ($alumnos as $alumno): //a partir de la fila de alumnos, agarra cada alumno
        $sumaNotas += $alumno["nota"]; //esto suma la nota del alumno
    ?>
        <tr>
            <td><?php echo $alumno["id"]; ?></td>
            <td><?php echo $alumno["nombre"]; ?></td>
            <td><?php echo $alumno["ciclo"]; ?></td>
            <td><?php echo $alumno["curso"]; ?></td>
            <td><?php echo $alumno["nota"]; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
$total = count($alumnos); //cuenta cuantos alumnos hay en el array principal
$media = $sumaNotas / $total; //hace la media de los alumnos
echo "<p>Total alumnos: $total</p>";
echo "<p>Nota media: " . number_format($media, 2) . "</p>"; //el number_format es para que se recorte exactamente en 2 decimales
?>

</body>
</html>