<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    
    <form method="POST">
       
        <p>
             Texto : <textarea name="texto" rows="5" cols="25"><?php echo $_POST ["texto"] ?? 0;?> </textarea>  
        </p>

        <input type="submit" value="Contar!" style="padding: 10px 20px; background: #4CAF50; color: white; border: none;">
    </form>

        <?php 
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $longitud = strlen ($_POST["texto"]);//Esto agarra el texto introducido en textarea, y nos permite sacar la longitud que tiene?>
            <h3>El texto tiene una longitud de <?php echo $longitud?></h3> 
            <?php } ?>
        
        
</body>
</html>


