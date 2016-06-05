<!DOCTYPE html>
<html>

<head>
    <title>Acceuil</title>
    <?php
        include("php/functions.php");
        echo head();
    ?>

</head>

<body class="nofooter">
<div id="site-container">
    <?php
            echo nav();
         ?>
        <div class="content">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
                <div class="row">
                    <h1 class="text-center">Bienvenue au CALM <small>Club Aerien Lille Metropole</small></h1>
                </div>
            <?php
            echo carrousel();
            echo content();
                ?>
            </div>
        </div>
    <?php
    echo copyright();
    ?>
    </div>
</body>


</html>
