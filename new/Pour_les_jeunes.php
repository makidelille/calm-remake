<!DOCTYPE html>
<html>

<head>
    <title>Pour les jeunes</title>
    <?php
        include("php/functions.php");
        generateHeader();
    ?>

</head>

<body>
<div id="site-container">
    <?php
            generateNav();
         ?>
        <div class="content" id="top">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well text-center">
                <div class="row">
                    <h1>Pour les jeunes</h1>
                </div>
            <?php
            generateCarousel();
            $string = "<div class=\"row text-justify\"> <h2>Pour les jeunes...</h2> <p>Je peux commencer à apprendre à piloter quand ? Dès que tes pieds touchent le palonnier… La loi t’impose juste d’avoir 16 ans avant ton premier vol seul à bord et 17 ans pour passer ton brevet…. Il n’y a donc aucune différence avec les adultes tant dans la formation que tu suivras que dans le brevet que tu obtiendras (Brevet de base ou Licence de pilote privé). Alors prêt pour tes premiers Touch and Go ?</p> <div id=\"BIA\"> <h4>Le Brevet d'Initiation Aéronautique</h4> <p>Pour les jeunes passionnés, Le Brevet d'initiation aéronautique (BIA) est un diplôme d’Etat délivré conjointement par le Ministère en charge des Transports et par le ministère de l'Éducation nationale. C’est un examen théorique qui sanctionne une culture générale dans le domaine aéronautique. L'enseignement est donné à l'aéro-club par les formateurs du CALM, tous diplômés du CAEA. Il permet aux jeunes de mettre le pied dans un milieu passionnant et souvent méconnu. Elle comprend un enseignement théorique, à raison de 40h de cours (Aérodynamique et Mécanique du vol, Connaisance des aéronefs, Météorologie, Navigation, Histoire de l'aviation), et des applications pratiques. Parmi ces applications, on trouve un vol découverte dans un avion du CALM et des visites programmées dans les milieux professionnels de l'aéroport de Lille pour concrétiser le tout. Un vol d'initiation au pilotage aux commandes d'un avion consacre la réussite à l'examen. La formation s'adresse aux jeunes à partir de la 4ème, possible dès la 5ème pour les très bons élèves. Le coût annuel de la formation est de 170 euros. La FFA offre par ailleurs des avantages aux jeunes du BIA qui souhaitent poursuivre vers une formation de pilote dans le cadre de son programme \"Objectif BIA\". </p> <p>Si cette formation vous intéresse prenez contact, info@calm.club ou bia@calm.club. Vous pouvez aussi télécharger la plaquette explicative BIA CALM et la FICHE D'INSCRIPTION 2016/2017 </p> <blockquote class=\"text-justify\"> <p> ‘’Magnifique‘’, ‘’Incroyable‘’, ‘’Extraordinaire‘’, sont les termes que j’entends le plus souvent. Et c’est avec des étoiles plein les yeux que les jeunes du B.I.A. vivent leur premier vol. Ils repartent plus motivés que jamais pour obtenir leur diplôme. Tout commence par quelques explications sur les commandes de vol et un repérage du tableau de bord. Après vérification de la check-list et un contact avec la tour de contrôle, l’avion peut s’élancer sur la piste de décollage et c’est parti pour ½ heure de vol </p> <footer class=\"blockquote-reverse\"><cite title=\"\">Daniel (Pilote Privé – Responsable du BIA)</cite></footer> </blockquote> </div> <div id=\"Bourses\"> <h4>Les Bourses</h4> <p>Si tu as moins de 21 ans, tu peux bénéficier des aides de la Fédération Française Aéronautique et de son émanation régionale, le Comité Régional Aéronautique Nord Pas de Calais. Le paiement de l’aide se fait au fur et à mesure de l’obtention d’un résultat. Ainsi, la prime doit t’aider à atteindre l’objectif suivant, de manière à minimiser les risques d’abandon de ta formation en cours de route. <ul> Les montants : <li>Lâcher (1er vol seul à bord de l’avion) : 335€</li> <li>Brevet de Base sans <abbr title=\"Brevet d'initiation Aéronautique\">BIA</abbr> : 335€</li> <li>Brevet de Base avec <abbr title=\"Brevet d'initiation Aéronautique\">BIA</abbr> : 500€</li> <li>Brevet de Pilote Privé : 670€</li> </ul> <span class=\"col-xs-1\"></span>Soit un total de 1340 € sans <abbr title=\"Brevet d'initiation Aéronautique\">BIA</abbr>, 1505€ avec <abbr title=\"Brevet d'initiation Aéronautique\">BIA</abbr>. </p> <p>Pour information, le coût total approximatif -sans bourses et selon les aptitudes de chacun- est d’environ 2000€ pour un brevet de base, 7000€ pour une licence de pilote privé (PPL). La bourse est versée sans délai et avec un formalisme réduit : le paiement intervient dès la réalisation de l’objectif sur une simple attestation du Calm. La bourse doit en effet participer efficacement à une dynamique Motivation / Formation / Financement.</p> <blockquote class=\"text-justify\"> <p> Après avoir passé le BIA, j’ai immédiatement été motivé pour aller plus loin et viser le brevet de Pilote Privé (PPL). Sans la confiance de mes parents et le soutien de la FFA, il m’aurait été impossible de financer mon rêve… Le CALM, en m’accompagnant, m’a permis de profiter pleinement de ma passion et peut être futur métier… </p> <footer class=\"blockquote-reverse\"><cite title=\"\">Paul (17 ans, Elève Pilote)</cite></footer> </blockquote> </div> </div>";
            echo prettify($string);
            ?>
            </div>
        </div>
    <?php
        generateCopyright();
    ?>
    </div>
    <nav class="footer navbar navbar-fixed-bottom hidden-xs">
        <div class="nav navbar-header">
            <a href="#top" class="navbar-brand glyphicon glyphicon-arrow-up"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#BIA">BIA</a></li>
            <li><a href="#Bourses">bourses</a></li>
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
            <li><a href="#BIA">BIA</a></li>
            <li><a href="#Bourses">bourses</a></li>
            <li><span class="col-xs-1"></span></li>
        </ul>
    </nav>
</body>


</html>
