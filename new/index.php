<!DOCTYPE html>
<html>

<head>
    <title>Acceuil</title>
    <?php
        include("php/functions.php");
        generateHeader();
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
                    <h1 class="text-center">Bienvenue au CALM <small>Club Aerien Lille Metropole</small></h1>
                </div>
            <?php
            generateCarousel();

                    $s = "<div class=\"row text-justify\"><h4 class=\"text-center\">  Basé à l’aéroport de Lille-Lesquin, le CALM est une association à but non lucratif qui propose au plus grand nombre une panoplie complète d’activités aéronautiques. <br/><i class=\"tab_to_right\">On embarque ?</i> </h4> <h2>   </span>Envie de faire plaisir ?</h3> <p> <span class=\"glyphicon glyphicon-plane rotate_90R\"></span> Un baptême pour le plaisir de la découverte, un vol d’initiation pour enfin prendre le manche… Le CALM propose de partager avec vous les joies de l’aviation… <a href=\"faire_plaisir.html\"> plus </a> </p> <h2>  Envie de devenir pilote ?</h3> <p> <span class=\"glyphicon glyphicon-plane rotate_90R\"></span> Fort de son équipe d’instructeurs et grâce à sa flotte moderne, le CALM vous mènera jusqu’aux principaux brevets de pilote reconnus à travers le monde. <a href=\"devenir_pilote.html\"> plus </a> </p><h2>  Envie de naviguer ou de completer vos competences ?</h3><p> <span class=\"glyphicon glyphicon-plane rotate_90R\"></span> Valider de nouvelles qualifications (hélice pas variable, train rentrant, glass cockpit, vol de nuit, IR privé…) ou simplement profiter de nos avions pour naviguer, tout est possible au CALM… <a href=\"devenir_pilote.html#qualif\"> plus </a> </p> </div>";
                echo prettify($s);
                ?>
            </div>
        </div>
    <?php
    generateCopyright();
    ?>
    </div>
</body>


</html>
