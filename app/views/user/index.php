<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  </head>
  <body>
    <h1>Lista de usuarios <a href="/user/create/<?php echo $user->id ?>" class="btn btn-primary">Nuevo</a></h1>

    <table class="table table-striped table-hover">
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>F. nacimiento</th>
        <th></th>
      </tr>

      <?php foreach ($users as $key => $user) { ?>
        <tr>
        <td><?php echo $user->name ?></td>
        <td><?php echo $user->surname ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->birthdate ?></td>
        <td>
          <a href="/user/show/<?php echo $user->id ?>" class="btn btn-primary">Ver</a>
        </td>
        <td>
          <a href="/user/edit/<?php echo $user->id ?>" class="btn btn-primary">Editar</a>
        </td>
        <td>
          <a href="/user/delete/<?php echo $user->id ?>" class="btn btn-primary">Borrar</a>
        </td>
        </tr>
      <?php } ?>
    </table>
  </body>
</html>    