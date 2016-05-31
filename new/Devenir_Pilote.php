<!DOCTYPE html>
<html>

<head>
    <title>Devenir pilote</title>
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
        <div class="content" id="top">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
                <div class="row">
                    <h1 class="text-center">Devenir pilote</h1>
                </div>
            <?php
            generateCarousel();
            ?>
                <div class="row text-justify">
                    <h2 class="text-center">Devenir pilote !</h2>
                    <p class="text"> <span class="col-xs-1"></span>Certains veulent devenir professionnels, d’autres instructeurs… Certains veulent prendre de la hauteur sur les choses, d’autres tout simplement admirer nos magnifiques paysages.. Il en était qui voulaient
                        maîtriser tous ces cadrans ou encore faire de la voltige, mais tous aujourd’hui n’aspire qu’à une chose… <strong>VOLER </strong>! Avec nos 9 instructeurs bénévoles, passionnés d’aéronautique et rodés à la pédagogie : le plaisir
                        d’apprendre est le maitre mot !</p>

                    <div id="BB" class="media">
                        <h3 class="col-xs-12 col-xs-offset-1 text">Le Brevet de Base (BB)</h3>
                        <div class="pull-right padding_10">
                            <img src="http://placehold.it/300x150" alt="" class="img-thumbnail" />
                        </div>
                        <em class="text text-right">Permet à partir de 15 ans de piloter un avion dans un rayon de 30 km du terrain.</em>
                        <p class="text "> <span class="col-xs-1"></span> L'obtention du brevet de base de pilote avion est validée après avoir passé avec succès l'épreuve théorique de pilote avion et avoir fait au moins 20 heures de vol d'instruction dont 5 heures en vol
                            solo (seul à bord). Le Brevet de base est délivré par un examinateur après un test en vol. Bien entendu vous devez répondre aux conditions d'aptitude physique et mentale. </p>
                        <blockquote class="text-justify">
                            <p class="text"><span class="col-xs-1"></span>Je souhaitais avancer par étape et ne pas foncer tête baissée vers un PPL. Le BB s’est donc présenté comme l’option qui correspondait le mieux à mes attentes. Depuis, j’ai pris confiance en moi
                                et le plaisir de voler s’est confirmé au grès de mes vols. Je vais donc passer à l’étape suivante en passant mon PPL, et bien entendu au CALM.</p>
                            <footer class="blockquote-reverse"><cite title="">Claire (Pilote -Titulaire du BB)</cite></footer>
                        </blockquote>
                    </div>
                    <div id="PPL">
                        <h3 class="col-xs-12 col-xs-offset-1 text">La licence de pilote privé (PPL)</h3>
                        <div class="pull-left padding_10">
                            <img src="http://placehold.it/300x150" alt="" class="img-thumbnail" />
                        </div>
                        <em class="text text-right">Permet de piloter à partir de 17 ans un avion dans toute la France avec la possibilité d'emmener des passagers. </em>
                        <p class="text"> <span class="col-xs-1"></span>L'obtention de la licence de pilote avion (PPL) est validée après avoir passé avec succès l'épreuve théorique de pilote avion et avoir fait au moins 45 heures de vol d'instruction dont au minimum 25
                            heures en double commande et 10 heures en vol solo supervisé (seul à bord) et durant lesquelles l'élève aura effectué 1 vol en navigation d' au moins 150 nautiques avec 2 atterrissages complets intermédiaires. Une initiation
                            au vol sans visibilité fait également partie du cursus. Le P.P.L est délivré par un « flight examinator » (FE) validé par la Direction Générale de l’Aviation Civile. Bien entendu vous devez répondre aux conditions d'aptitude
                            physique et mentale. Vous ne pouvez pas transporter de passagers ou de fret contre rémunération, mais vous pouvez partager les dépenses de fonctionnement d'un vol avec vos passagers .</p>
                        <blockquote class="text-justify">
                            <p class="text"><span class="col-xs-1"></span>Le PPL est pour moi la liberté. Liberté de voler où l’on veut, seul ou avec des amis, et ainsi faire partager ma passion. C’est aussi le plaisir de découvrir rapidement de nouveaux espaces de manière
                                différente et cela pour un coût très abordable (moins cher que le train). Enfin c’est la porte d’entrée vers d’autres activités pour continuer à progresser : voyages à l’étranger, vol de nuit, voltige, IR et licences professionnelles.
                                Le PPL, ça donne des ailes !</p>
                            <footer class="blockquote-reverse"><cite title="">Romain (Pilote Privé)</cite></footer>
                        </blockquote>
                    </div>
                    <div id="qualif">
                        <h3 class="col-xs-12 col-xs-offset-1 text">Les qualifications</h3>

                        <h4 class="text"> Le vol de nuit</h4>
                        <div class="pull-left padding_10">
                            <img src="http://placehold.it/300x150" alt="" class="img-thumbnail" />
                        </div>
                        <p class="text"><span class="col-xs-1"></span>c'est du vol à vue avec de bonnes conditions météo : pas de nuages sous 1500 m, pas de précipitations, de brouillards prévus, une visibilité supérieure à 8 km . Vous devrez lors de vos navigations
                            utiliser des aérodromes agréés vol de nuit ainsi que des cheminements et itinéraires spécifiques. Tous les avions du CALM (excepté le Dynamic WT9) sont équipés en conséquence. Le vol de nuit vous fera découvrir le vol à visibilité
                            réduite, là ou les illusions d'optique sont nombreuses, il vous initiera à un usage plus complet et structuré des instruments de bord. La qualification Vol de Nuit est délivrée avec un minimum de 5 heures de vol de nuit dont
                            3 en double commande.</p>
                        <h4 class="text">Les autres qualifications</h4>
                        <div class="pull-right padding_10">
                            <img src="http://placehold.it/300x150" alt="" class="img-thumbnail" />
                        </div>
                        <p class="text"><span class="col-xs-1"></span>Grâce au WT9 Dynamic, vous pourrez passer au CALM les qualifications Glass Cockpit, hélice à pas variable et train rentrant. Avec notre PA28, vous pourrez naviguer en IFR en toute sérénité.
                        </p>
                        <blockquote class="text-justify">
                            <p class="text"><span class="col-xs-1"></span>J’avais envie du vol de nuit. Oh pas Saint-Exupéry, non, confronter à la réalité les images dans la tête des lumières de la ville vue par-dessus. J’avais envie du vol de nuit. Pas pour imaginer
                                être un héros mais simplement pour profiter d’un instant magique et le partager. J’ai pris un avion un soir, accompagné d’une amie qui n’avait pas vécu cette expérience. Au départ le soleil rasant, sur l’horizon faisait
                                rougeoyer le ciel. Je suis allé jusque la côte, la nuit devenait sombre, sur l’eau des ferrys s’éloignaient, illuminés de centaines de lumières. Les spots, les feux multicolores du port se reflétaient sur l’eau. La ville
                                plus loin montrait ses rues avec ses enfilades de lampadaires. Nous ressentions une sorte de calme. L’avion filait comme sur un rail, sans la moindre petite perturbation. Mon amie souriait, et moi un sourire en forme de
                                banane s’est ancré dans ma tête. Après un moment et ce vol de plénitude, complété d’un atterrissage sous les lumières de la rampe de piste, en kiss, une étincelle est restée dans le coin de mon œil pour un long moment…
                            </p>
                            <footer class="blockquote-reverse"><cite title="">Luc  (Pilote privé)</cite></footer>
                        </blockquote>

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