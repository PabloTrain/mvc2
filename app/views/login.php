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

        <?php require "../app/views/header.php" ?>
        
        <main role="main" class="container">
        
            <form name="login" action="#">
                <p class="mt-5">
                    <label for="user">Usuario</label>
                    <input type="text" name="user" id="user" required>
                </p>
                <p>
                    <label for="contraseña">Contraseña</label>
                    <input type="text" name="contraseña" id="contraseña" required>
                </p>
                <input type="submit" value="Iniciar sesión">
            </form>
            

        </main>
    
        <?php require "../app/views/footer.php" ?>

    </body>
</html>