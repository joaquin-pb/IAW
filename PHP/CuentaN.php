<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta N</title>
</head>
<body>
    

    <form method="POST">
        <label for="opcion">Elige una opción para la cuenta :</label>
        <select name="opcion" id="opcion">
            <option value="ascen">Ascendente</option>
            <option value="descen">Descendente</option>
        </select>
        <p>
            Dime N : <input type="number" name="tope" style="padding: 10px; font-size: 16px;" >
        </p>

        <input type="submit" value="¡Enviar!" style="padding: 10px 20px; background: #4CAF50; color: white; border: none;">
        </form>

    <?php 
    if($_SERVER["REQUEST_METHOD"]=="POST"){ //Lo de siempre, comprobar que llegan datos del formulario

        $seleccion = $_POST["opcion"]; //Seleccionamos el select con name=opcion
        $repes=$_POST ["tope"];//aca seleccionamos el "tope"
    if ($seleccion == "ascen"){ //si seleccion es decir, $_POST["opcion"], es ascen(se selecciona en option value="ascen") ya que es como un hijo de opcion

            for ($i=0;$i<=$repes; $i++){
                echo $i ;
            }
        }else if($seleccion == "descen"){

            for ($i=$repes;$i>=0;$i--){
            echo $i;

            }


        }
       
    } ?>
</body>
</html>