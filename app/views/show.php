<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show</title>
    </head>
    <body>
        <h1>Detalle de producto</h1>
        <table>
            <ul>
                <li>
                    <strong>Identificador: </strong>
                    <?php echo $product[0]?>
                </li>
                <li>
                    <strong>Nombre: </strong>
                    <?php echo $product[1]?>
                </li>
                <li>
                    <strong>Precio: </strong>
                    <?php echo $product[2] . "€"?>
                </li>
                <a href="../index">Ir al inventario</a>            
            </ul>            
        </table>
    </body>
</html>