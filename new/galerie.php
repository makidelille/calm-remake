<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Galerie</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height" />

    <link href="css/index.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/galerie.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/galerie.js"></script>
    <script src="js/index.js"></script>
    <?php
        include("php/functions.php");
    ?>

</head>

<body class="nofooter">
<div id="site-container">
    <?php
            generateNav();
         ?>
    <div class="content">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
            <div class="row">
                <h1 class="text-center">Galerie Photos</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-12" align="center" id="photo-display">
                    <div class="thumbnail center-block">
                        <img src="http://placehold.it/1500x1000" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/1500x1000" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/200x300" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/200x300" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/1500x1000" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/300x200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/2200x1200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/2200x1200" alt="" />
                    </div>
                    <div class="thumbnail center-block">
                        <img src="http://placehold.it/2200x1200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/200x300" alt="" />
                    </div>
                </div>
               </div>
        </div>
        <div class="copyright">
            <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-12 text-center">
                <h6>Le Calm, partenaire d'Aéroport de Lille et Sogarel</h6></div>
            <div class="row">
                <div class="col-md-2 col-md-offset-4 col-sm-4 col-sm-offset-2 col-xs-6"><img src="img/AP LILLE.png" class="img-responsive" alt=""></div>

                <div class="col-md-2 col-sm-4 col-xs-6"><img src="img/SOGAREL.png" class="img-responsive" alt=""></div>
            </div>
        </div>
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
