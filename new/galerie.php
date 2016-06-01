<!DOCTYPE html>
<html>

<head>
    <?php
        include("php/functions.php");
        echo head();
    ?>

    <!-- galerie specific -->
    <link rel="stylesheet" href="css/galerie.css">
    <script src="js/galerie.js"></script>


</head>

<body class="nofooter">
<div id="site-container">
    <?php
            echo nav();
         ?>
    <div class="content">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
            <div class="row">
                <h1 class="text-center">Galerie Photos</h1>
                <hr>
            </div>
            <?php
                echo content();
            ?>
        </div>
        <?php
           echo copyright();
        ?>
    </div>
    </div>
    <!-- full screen display -->
    <div display="hidden" id="fullscreen">
        <div id="fullscreenControls">
            <span class="" id="close" align="center" >
                 <span class="glyphicon glyphicon-remove"></span>
            </span>

            <span class="" id="left">
                <span class="glyphicon glyphicon-triangle-left"></span>
            </span>
            <span class="" id="right">
                <span class="glyphicon glyphicon-triangle-right"></span>
            </span>

            <span id="toggleIcons">
                <span class="glyphicon glyphicon-collapse-down"></span>
            </span>

        </div>
        <div id="fullscreenImg"></div>



    </div>


    </body>

</html>
