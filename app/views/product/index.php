<h1>Lista de productos <a href="/product/create/<?php echo $product->id ?>" class="btn btn-primary">Nuevo</a></h1>

<table class="table table-striped table-hover">
  <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Fecha de compra</th>
    <th></th>
  </tr>

  <?php foreach ($products as $key => $product) { ?>
    <tr>
    <td><?php echo $product->name ?></td>
    <td><?php echo $product->price ?></td>
    <td><?php echo $product->fecha_compra ?></td>
    <td>
      <a href="/product/show/<?php echo $product->id ?>" class="btn btn-primary">Ver </a>
    </td>
    <td>
      <a href="/product/edit/<?php echo $product->id ?>" class="btn btn-primary">Editar </a>
    </td>
    <td>
      <a href="/product/delete/<?php echo $product->id ?>" class="btn btn-primary">Borrar </a>
    </td>
  </tr>
  <?php } ?>
</table>