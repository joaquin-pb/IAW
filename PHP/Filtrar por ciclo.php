<?php
$alumnos = [
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
    <form method="POST">
      
        <p>
            Dime Ciclo: <input type="text" name="ciclo" style="padding: 10px; font-size: 16px;" value="<?php echo isset($_POST['ciclo']) ? $_POST['ciclo'] : ''; //esto basicamente le dice existe el post ciclo? si es si(?), se imprime, si es no (:) se deja vacio ?>">
        </p>

        <input type="submit" value="¡Enviar!" style="padding: 10px 20px; background: #4CAF50; color: white; border: none;">
    </form>

 <?php if($_SERVER["REQUEST_METHOD"]=="POST"){ ?>

<table style="border:1px black solid; width: 50%; text-align: left;">
    <tr>
        <th>ID</th><th>Nombre</th><th>Ciclo</th><th>Curso</th><th>Nota</th>
    </tr>
    <?php

    $contador=0; //creamos el contador
    
    $filtra_ciclo = $_POST["ciclo"];  //guardamos lo que el usuario escribio, por ejemplo DAW

    foreach ($alumnos as $alumno):
        if($alumno["ciclo"] == trim($filtra_ciclo) ) { //esto basicamente dice, es $alumno["ciclo"] igual a lo que escribio el usuario(trim($filtra_ciclo))? 
            $contador++; //si es asi, se suma 1 al contador y dibuja los tr de ese alumno
    ?>
        <tr>
            <td><?php echo $alumno["id"]; ?></td>
            <td><?php echo $alumno["nombre"]; ?></td>
            <td><?php echo $alumno["ciclo"]; ?></td>
            <td><?php echo $alumno["curso"]; ?></td>
            <td><?php echo $alumno["nota"]; ?></td>
        </tr>
    <?php 
        } 
    endforeach;
    ?>
</table>

<p>NUMERO DE ALUMNOS EN EL CICLO DE <?php echo $filtra_ciclo ?> son <?php echo $contador //aca solo imprimimios?> </p>

<?php 
} 
?>

</body>
</html>