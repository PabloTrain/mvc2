<h1>Edición de Producto</h1>

<form method="post" action="/product/update">
    <input type="hidden" name="id"
    value="<?php echo $product->id ?>">

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="name" class="form-control"
    value="<?php echo $product->name ?>">
</div>
<div class="form-group">
    <label>Precio</label>
    <input type="text" name="price" class="form-control"
    value="<?php echo $product->price ?>">
</div>
<div class="form-group">
    <label>F. cumpleaños</label>
    <input type="text" name="fecha_compra" class="form-control"
    value="<?php echo $product->fecha_compra ?>">
</div>
<button type="submit" class="btn btn-default">Enviar</button>
</form>