<!DOCTYPE html>
<html>

<head>
    <title>Acceuil</title>
    <link rel="icon" type="image/png" href="img/favicon.png" />

    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />

    <link href="css/index.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!--scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                    <h1 class="text-center">Bienvenue au CALM <small>Club Aerien Lille Metropole</small></h1>
                </div>
                <div class="row">
                    <div id="press_carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#press_carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#press_carousel" data-slide-to="1"></li>
                            <li data-target="#press_carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="img/Baptmes.jpg" class=" img-rounded center-block">
                            </div>
                            <div class="item">
                                <img src="img/Vol dinitiation_re.JPG" class=" img-rounded center-block">
                            </div>
                            <div class="item">
                                <img src="img/WT9_re.jpg" class="img-rounded center-block">
                            </div>
                        </div>
                        <a class="left carousel-control" href="#press_carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        </a>
                        <a class="right carousel-control" href="#press_carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>

                <div class="row text-justify">
                    <h4 class="text-center">
                        Basé à l’aéroport de Lille-Lesquin, le CALM est une association à but non lucratif qui propose au plus grand nombre une panoplie complète d’activités aéronautiques.
                        <br/><i class="tab_to_right">On embarque ?</i>
                    </h4>
                    <h3 class="col-xs-12"></span>Envie de faire plaisir ?</h3>
                    <p class="text"><span class="col-xs-1"></span><span class="glyphicon glyphicon-plane rotate_90R"></span> Un baptême pour le plaisir de la découverte, un vol d’initiation pour enfin prendre le manche… Le CALM propose de partager avec vous les joies
                        de l’aviation… <a href="faire_plaisir.html"> plus </a>
                    </p>
                    <h3 class="col-xs-12">Envie de devenir pilote ?</h3>
                    <p class="text"><span class="col-xs-1"></span><span class="glyphicon glyphicon-plane rotate_90R"></span> Fort de son équipe d’instructeurs et grâce à sa flotte moderne, le CALM vous mènera jusqu’aux principaux brevets de pilote reconnus à travers
                        le monde. <a href="devenir_pilote.html"> plus </a>
                    </p>
                    <h3 class="col-xs-12">Envie de naviguer ou de complter vos competences ?</h3>
                    <p class="text"><span class="col-xs-1"></span><span class="glyphicon glyphicon-plane rotate_90R"></span> Valider de nouvelles qualifications (hélice pas variable, train rentrant, glass cockpit, vol de nuit, IR privé…) ou simplement profiter de nos
                        avions pour naviguer, tout est possible au CALM… <a href="devenir_pilote.html#qualif"> plus </a>
                    </p>

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
