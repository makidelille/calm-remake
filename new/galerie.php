<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Galerie</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height" />

    <link href="css/index.css" rel="stylesheet" />
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

<body>
<div id="site-container">
    <?php
            generateNav();
         ?>
    <div class="content">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
            <div class="row">
                <h1 class="text-center">Galerie Photos</h1>
            </div>
            <div class="row">
                <div class="col-xs-12" align="center" id="photo-display">
                    <div class="thumbnail">
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
                    <div class="thumbnail">
                        <img src="http://placehold.it/2200x1200" alt="" />
                    </div>
                    <div class="thumbnail">
                        <img src="http://placehold.it/200x300" alt="" />
                    </div>
                </div>
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" id="zoomModal">
                    <div class="modal-dialog " role="document">
                        <div class="modal-content noshadow">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-label="Close" style="background:white; border-radius:3px"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body center-block" align="center">
                                <button class="center-block col-xs-1 glyphicon glyphicon-menu-left" value="0"></button>
                                <img id="img" src="http://placehold.it/200x300" alt="" class="col-xs-10" />
                                <button class="center-block col-xs-1 glyphicon glyphicon-menu-right" value="1"></button>
                            </div>
                        </div>
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
    </body>

</html>
