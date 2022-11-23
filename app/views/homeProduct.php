<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Sticky Footer Navbar Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <?php require "header.php" ?>
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
                <a href="show/?id=<?php echo $item[0] ?>">Ver detallles</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>

<?php require "footer.php" ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="../../assets/js/vendor/popper.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
</body>
</html>