<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de Multiplicar</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        input { padding: 5px; margin: 5px 0; }
        .resultado { margin-top: 20px; }
    </style>
</head>
<body>

    <h2>Generador de Tabla de Multiplicar</h2>

    <form method="POST">
        <label for="multi">Introduce un número para ver su tabla:</label><br>
        <input type="number" name="multi" id="multi" required placeholder="Ej. 5">
        <br>
        <input type="submit" value="Calcular tabla">
    </form>

    <div class="resultado">
        <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){ 
            $num = (int)($_POST["multi"] ?? 0); //Esto agarra el numero, definido en la etiqueta input name=multi y lo convierte a un entero(int) y el ?? 0 le asigna el valor de 0 a la variable
            echo "<h4>Tabla de multiplicar de $num </h4>";
            
            for($i=0; $i<=10; $i++){ // aca le decimos al bucle que mientras que $i sea menor o igual que 10, se va sumando
                $result = $i * $num; //aca guarda en la variable $result el valor de $i multiplicado por el numero, es decir cuando $i sea 1 multiplicara el numero que ingresamos por 1 y asi sucesivamente
                
                echo " $num x $i = " . $result; 
            }
        } 
        ?>
    </div>

</body>
</html>