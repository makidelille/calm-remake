<!DOCTYPE html>
<html>

<head>
    <?php
        include("php/functions.php");
        echo head();
    ?>
</head>

<body>
<div id="site-container">
    <?php
            echo nav();
         ?>
        <div class="content" id="top">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
                <div class="row">
                    <h1 class="text-center">Devenir pilote</h1>
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
    <nav class="footer navbar navbar-fixed-bottom hidden-xs">
        <div class="nav navbar-header">
            <a href="#top" class="navbar-brand glyphicon glyphicon-arrow-up"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#BB">Brevet de base</a></li>
            <li><a href="#PPL">PPL</a></li>
            <li><a href="#qualif">Qualif possible</a></li>
            <li><span class="col-xs-1"></span></li>
        </ul>
    </nav>
    <nav class="footer navbar navbar-fixed-bottom visible-xs">
        <div class="nav navbar-header">
            <a href="#top" class="navbar-brand glyphicon glyphicon-arrow-up"></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footerbar_xs">
                <span class="sr-only">Toggle navigation</span>
                <span class="glyphicon glyphicon-menu-hamburger"></span>
        </div>
        </button>
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="footerbar_xs">
            <li><a href="#BB">Brevet de base</a></li>
            <li><a href="#PPL">PPL</a></li>
            <li><a href="#qualif">Qualif possible</a></li>
            <li><span class="col-xs-1"></span></li>
        </ul>
    </nav>
</body>


</html>
