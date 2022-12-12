<h1>Detalle del producto <?php echo $product->id ?></h1>
<ul>
    <li><strong>Nombre: </strong><?php echo $product->name ?></li>
    <li><strong>Tipo de producto: </strong><?php echo $product->type->name ?></li>
    <li><strong>Precio: </strong><?php echo $product->price ?></li>
</ul>