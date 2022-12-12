<h1>Alta de producto</h1>

<form method="post" action="/product/store">

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="name" class="form-control">
</div>

<div class="form-group">
    <label>Tipo de producto</label>
    <select>
        <?php
        foreach ($product_types as $type) {
            echo "<option value=\" $type->id \">$type->name</option>";
        }
        ?>
    </select>
</div> 

<div class="form-group">
    <label>Precio</label>
    <input type="text" name="price" class="form-control">
</div>


<button type="submit" class="btn btn-default">Enviar</button>
</form>