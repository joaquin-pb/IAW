<?php
$carrito = [ //aca adentro, se guardan todas lo que definamos dentro de los []
    ["nombre" => "Ratón",   "precio" => 10.0, "cantidad" => 2],
    ["nombre" => "Teclado", "precio" => 20.0, "cantidad" => 1],
    ["nombre" => "Monitor", "precio" => 150.0,"cantidad" => 1],
    ["nombre" => "PC", "precio" => 550.0,"cantidad" => 1],
];
?>
<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"><title>Ej3 - Carrito</title></head>
<body>
<h1>Carrito de la compra</h1>

<table>
    <tr>
        <th>Producto</th><th>Precio</th><th>Cantidad</th><th>Subtotal</th>
    </tr>
    <?php
    $total = 0;  //acumulador
    foreach ($carrito as $item): //cada producto que se saca, se le llama item
        $subtotal = $item["precio"] * $item["cantidad"]; //tan solo multiplica el precio del producto por la cantidad de productos de ese producto
        $total += $subtotal; //va sumando cada $subtotal a medida que van pasando los items
    ?>
        <tr>
            <td><?php echo $item["nombre"]; //cada una es una columna?></td>
            <td><?php echo number_format($item["precio"], 2); ?> €</td>
            <td><?php echo $item["cantidad"]; ?></td>
            <td><?php echo number_format($subtotal, 2); ?> €</td>
        </tr>
    <?php endforeach; ?>
</table>

<h3>Total a pagar: <?php echo number_format($total, 2); //al final number_format es para redondear el decinmal?> €</h3>

</body>
</html>