<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Inventario de productos</h1>
    <table border="2">
        <tr>
            <td>Identificador</td>
            <td>Nombre</td>
            <td>Enlace</td>
        </tr>
        <?php foreach ($products as $item): ?>
        <tr>
            <td><?php echo $item[0]?></td>
            <td><?php echo $item[1]?></td>
            <td>
                <a href="?method=show&id= <?php echo $item[0] ?>">Ver detallles</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>