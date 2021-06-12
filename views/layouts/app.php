<?php
    
    function App($title){ ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title; ?></title>
        </head>
        <body>
            <?php $URI= $_SERVER['PHP_SELF'];
                if ($URI=='/MSME/index.php') { ?>
                    <script src="dist/bundle.js"></script>
                <?php } else {
                    # code...
                } ?>
                
        </body>
        </html>
    <?php }
    function Development($title){ ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $title; ?></title>
        </head>
        <body>
            <?php $URI= $_SERVER['PHP_SELF'];
                if ($URI=='/MSME/index.php') { ?>
                    <link rel="stylesheet" href="src/css/index.css">
                    <link rel="stylesheet" href="src/css/navbar.css">
                    <link rel="stylesheet" href="src/css/home.css">
                    <script src="src/Router/index.routes.js"></script>
                    <script src="src/functions/navbar.js"></script>
                    <script src="src/functions/validations.js"></script>
                <?php } else {
                    # code...
                } ?>
                
        </body>
        </html>
    <?php } 
    function Session($title){ ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?php echo $title ?></title>
        </head>
        <body>
        </body>
            <script src="https://kit.fontawesome.com/d241b6fe86.js" crossorigin="anonymous"></script>
            <script src="../dist/session.bundle.js"></script>
            <script src="../../dist/session.bundle.js"></script>
        </html>
    <?php }
?>