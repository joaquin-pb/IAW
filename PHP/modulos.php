<?php
    session_start(); //Guardamos los datos del usuario para que no se pierdan al recargar la pagina

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulos</title>
</head>
<body style="font-family: Arial; padding: 50px;">

    <h1>¡Hola !</h1>

    <form method="POST">
        <h1>Módulos ASIR</h1>
        
        Cuántos módulos tiene ASIX : 
        <input type="text" name="modulos" value="<?php echo   $modulo_escrito = $_POST['modulos'] ?? '' ; //aca le decimos a php que agarre lo que viene del formulario, y lo guarda en $modulo_escrito y el echo lo imprime?>" >
        <br><br>
        <input type="submit" value="Añadir">
    </form>

    <?php
    
    if(!isset($_SESSION["modulos"])){//Esto comprueba si la sesion "modulos existe", en caso de que no crea un array vacio
        $_SESSION["modulos"]=[]; 

    }
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $modulo=trim($_POST["modulos"]); //aca agarramos lo que hayamos escrito en modulo, y de paso, le quitamos el espacio en blanco
        $_SESSION["modulos"][]=$modulo; // aca le decimos que añada $modulo(cualquier nombre añadido), al array, por eso ponemos los [], para que sea una lista
    }
    if(!empty($_SESSION["modulos"])): // aca le decimos, si la sesion no esta vacia, dibuja la lista 

       echo "<h3>LISTADO DE MODULOS</h3>";
       echo "<ul>";
        foreach (($_SESSION["modulos"]) as $modulo): //aca agarra el primer modulo de la session llamada modulos
            echo "<li> $modulo </li>"; //aca imprime el modulo
        endforeach;
        echo "</ul>";
    else: 
        echo "<h4>No has anidado ningun modulo</h4>";
    endif;
    ?>
    
    
</body>
</html>