<!DOCTYPE html>
<html>

<head>
    <title>Club</title>
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
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well text-center">
                <div class="row ">
                    <h1>Le Club</h1>
                </div>
<?php
                generateCarousel();
?>
                <div class="row text-justify">
                    <h2 class="text-center">Le CALM, structure associative depuis 1957…</h2>
                    <p class="text"> <span class="col-xs-1"></span>Avec plus de 200 membres actifs, le CALM, Club Aérien Lille Métropole, affilié à la Fédération Française Aéronautique et agréé Jeunesse et Sport, est l’un des plus importants aéroclubs au nord de Paris.
                        Association à but non lucratif, le CALM vit au rythme de sa passion de l’aviation en investissant dans la formation de futurs pilotes mais aussi en développant et modernisant sa flotte. L’esprit Club, c’est aussi : un lieu d’échanges
                        et de convivialité, des actions toute l’année pour partager nos émotions aéronautiques….</p>

                    <div id="installation">

                        <h3 class="col-xs-12 col-xs-offset-1 text">Nos installations</h3>
                        <p class="text"><span class="col-xs-1"></span> Le CALM profite de toutes les installations de qualité de l’aéroport LILLE LESQUIN : 2 pistes en dur, éclairées, un espace aérien contrôlé avec une veille radar permanente… Le club, installé au pied
                            des pistes, bénéficie de son propre hangar, d’un club house, de salles pilotes… un lieu rempli d’histoires et de bonne humeur ! Des conditions idéales pour vivre sa passion en pleine sécurité toute l’année !
                        </p>
                        <h4><span class="col-xs-12 col-xs-offset-2 text">L'aeroport de lesquin</h4>
                        <p class="text"> <span class="col-xs-1"></span>Le CALM est installé à l’aéroport international de Lesquin, au cœur d’une réseau autoroutier très dense : accessibilité maximale à proximité de la Belgique, des principales villes du Nord Pas de Calais
                            et à 15 mn du centre de Lille !</p>
                        <p class="text"> <span class="col-xs-1"></span>L’aéroport est équipé VFR Nuit et IFR (intéressant pour développer vos futures qualifications !) et possède 2 pistes :
                            <ul>
                                <li>1 piste principale (08/26) de 2845 m : atterrissage tous temps (important dans notre région…), balisage lumineux haute intensité</li>
                                <li>1 piste secondaire (02/20) de 1600 m</li>
                            </ul>
                        </p>
                        <p class="text"><span class="col-xs-1"></span>La présence de nombreux vols commerciaux permet aux pilotes du CALM de se familiariser avec les caractéristiques d’un trafic aérien notable, de s’y adapter et ensuite de voyager sur d’autres aérodromes
                            en toute facilité !</p>
                        <p class="text"><span class="col-xs-1"></span>De plus, l’aéroport bénéficie des services de l’Etat : Direction de l’aviation civile, police gendarmerie, douanes et surtout METEO France.</p>


                        <h4><span class="col-xs-12 col-xs-offset-2 text">Le club</h4>
                        <p class="text"> <span class="col-xs-1"></span>Installé au parking Echo, le CALM bénéficie de locaux et hangar spacieux, régulièrement rénovés (des travaux sont encore programmés en 2014 !)</p>
                        <p class="text"> <span class="col-xs-1"></span>Le club House, lieu d’échanges et de partages aéronautiques par excellence ! Vous vous attarderez pour y boire un café, regarder les avions décoller ou préparer vos vols…L’été, vous profiterez de sa
                            terrasse (barbecue compris !) donnant sur le parking des avions et les pistes. L’accès au club house est adapté aux personnes à mobilité réduite.</p>
                        <p class="text"> <span class="col-xs-1"></span>Le secrétariat, espace réservé à Patricia, qui vous accueillera avec le sourire pour vous renseigner, vous guider, vous aider dans vos démarches…</p>
                        <p class="text"> <span class="col-xs-1"></span>La salle Pilotes, dédiée à la préparation des vols, au briefing des instructeurs, à la gestion administrative des avions…!</p>
                        <p class="text"> <span class="col-xs-1"></span>La cuisine, pour les amateurs de navigations culinaires, tout y est !</p>
                        <p class="text"> <span class="col-xs-1"></span>Et bien entendu nos 2 hangars… Avec un accès direct au tarmac, il sait loger et protéger nos avions en toute sécurité…</p>
                        <p class="text"> <span class="col-xs-1"></span>Nos installations virtuelles : le planning des avions est directement géré sur internet via Open Flyers pour pouvoir réserver à tout moment votre prochain vol et aussi gérer votre compte pilote !</p>


                        <h4><span class="col-xs-12 col-xs-offset-2 text">Les horaires</h4>
                        <p class="text"> <span class="col-xs-1"></span>Le club est ouvert à ses membres toute l’année, tous les jours, 24h/24h…. Un système d’accès par empreintes digitales au club house et aux avions vous donne toute liberté pour voler quand bon vous
                            semble !</p>
                    </div>
                    <div id="flote">
                        <h3 class="col-xs-12 col-xs-offset-1 text">La flote</h3>
                        <div class="avion row">
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5L">
                            </div>
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>ROBIN HR 200 - F-GTPO</h4>
                                <p>Type: Biplace école à train fixe, VFR nuit. Usage: Ecole, Promenade Moteur: 118 cv Lycoming O-235-L2A Performances: 100 Kt Autonomie: ~4h30 environ Avionique: 1 radio COM/NAV , Transpondeur mode C, Intercom 2 voies, GPS
                                    Garmin
                                </p>
                                <h5>Tarif : 133€/Heure au 1er Janvier 2016</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="avion row">
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>ROBIN HR 200  - F-GTZE</h4>
                                <p>Type: Biplace école à train fixe, VFR nuit. Usage: Ecole, Promenade Moteur: 118 cv Lycoming O-235-L2A Performances: 100 Kt Autonomie: ~4h30 environ Avionique: 1 radio COM/NAV, Transpondeur mode C, Intercom 2 voies, GPS
                                    Garmin
                                </p>
                                <h5>Tarif  :  133€/Heure au 1er Janvier 2016</h5>
                            </div>
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5R">
                            </div>
                        </div>
                        <hr>
                        <div class="avion row">
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5L">
                            </div>
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>WT9 DYNAMIC – F-WVLM</h4>
                                <p>Type: Biplace à train rentrant, hélice à pas variable. Usage: Promenade, Voyage Moteur: 115 cv Rotax 914 / Performances: 150 Kt / Autonomie: ~6h25 environ Avionique: EFIS Dynon Skyview 10” (EMS, batterie, GPS), Pilote automatique
                                    , 2ème écran Skyview 10”, Pack radio transpondeur FUNKWERK ATR833 TRT800H-Intercom
                                </p>
                                <h5>Tarif  :  148€/Heure au 1er Janvier 2016</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="avion row">
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>SOCATA TB9 - OO-GLA</h4>
                                <p>Type: 4 places à train fixe, VFR nuit. Usage: Ecole, Promenade, voyage Moteur: 160 cv Lycoming - Performances: 100 Kt Masse maxi au décollage: 1060kg Consommation: 38l /heure Avionique: 1 radio COM/NAV , Transpondeur mode
                                    C, Intercom 2 voies, GPS Garmin 150
                                </p>
                                <h5>Tarif : 138€/Heure au 1er Janvier 2016</h5>
                            </div>
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5R">
                            </div>
                        </div>
                        <hr>
                        <div class="avion row">
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5L">
                            </div>
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>ROBIN DR400 - F-GLDZ</h4>
                                <p>Type: 4 places à train fixe, VFR nuit, IR. Usage: voyage Moteur: 180 cv Lycoming Performances: 130 Kt Consommation: 38l /heure Avionique: 1 radio COM/NAV , Transpondeur mode C, Intercom 2 voies, GNS 430, Pilote automatique,
                                    ILS
                                </p>
                                <h5>Tarif  :  168€/Heure au 1er Janvier 2016</h5>
                            </div>
                        </div>
                        <hr>
                        <div class="avion row">
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>PA28 201 RT Arrow IV - F-GMSE</h4>
                                <p>Type: 4 places à train rentrant, VFR nuit, IR. Usage: voyage Moteur: 200 cv Performances: 150 Kt Avionique: Aspen EDF1000 Pro, Stormscope, Transpondeur mode S, DME, ADF, 2 VOR/ILS, 2 GNS 430 dont un GNSS, Pilote automatique
                                    3 axes, Aspen Pro EFD1000
                                </p>
                                <h5>Tarif  :  225€/Heure au 17 juillet 2016</h5>
                            </div>
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5R">
                            </div>
                        </div>
                        <hr>
                        <div class="avion row">
                            <div class="col-xs-6 text-center">
                                <!-- photo -->
                                <img src="http://placehold.it/300x150" class="img-thumbnail img-responsive rotate_5L">
                            </div>
                            <div class="col-xs-6  text-center">
                                <!-- texte -->
                                <h4>DA40 168cv - F-HDJF</h4>
                                <p>Type: 4 places à train fixe, VFR nuit, IR. Usage: voyage Moteur: 168 cv Diesel Austro Engine Performances: 125 Kt Avionique: 1 radio COM/NAV, Transpondeur Mode C, Garmin 795, ILS
                                </p>
                                <h5>Tarif  :  155€/Heure au 1Eer Janvier 2016 </h5>
                            </div>
                        </div>
                        <div id="equipe">
                            <h3 class="col-xs-12 col-xs-offset-1 text">L'équipe</h3>

                            <p class="text"><span class="col-xs-1"></span> Un club, en association loi 1901, c’est une merveilleuse alchimie entre des permanents, des membres élus lors de l’assemblée générale et tous les membres actifs bénévoles !</p>
                            <p class="text"><span class="col-xs-1"></span> Tous, avec enthousiasme, participent à la gestion de l’association au quotidien, organisent ou participent aux manifestations aéronautiques, entretiennent les locaux et la flotte… Chacun trouve
                                sa place en fonction de ses domaines de compétences et du temps qu’il dispose…
                            </p>
                            <h4><span class="col-xs-12 col-xs-offset-2 text">Les permanants</h4>
                            <p class="text"><span class="col-xs-1"></span>Patricia, notre secrétaire mais aussi hôtesse d’accueil, standardiste…, est parfois une vraie nounou pour nos pilotes ! Notre rayon de soleil quotidien même quand la météo n’est pas favorable !
                            </p>
                            <div class="pull-left padding_10">
                                <img src="http://placehold.it/200x150" alt="" class="img-thumbnail" />
                            </div>
                            <p class="text"><span class="col-xs-1"></span> Patricia sera heureuse de vous accueillir au secrétariat aux horaires suivants :
                                <ul class="list-unstyled"><strong>
                                    <li>Le mardi de 13h à 19h</li>
                                    <li>Le mercredi de 13h à 20h</li>
                                    <li>Le vendredi de 13h à 19h</li>
                                    <li>Le samedi de 13h à 18h</li>
                                    <li>Les lundi, jeudi et dimanche, le secrétariat est fermé.</li>
                                  </strong></ul>
                            </p>
                            <h4><span class="col-xs-12 col-xs-offset-2 text">les instructeurs</h4>
                            <p class="text"><span class="col-xs-1"></span>La véritable richesse de notre club : 11 instructeurs bénévoles animés uniquement par le plaisir de partager leurs connaissances et leur passion de voler !
                            </p>
                            <p class="text"><span class="col-xs-1"></span> Avec plusieurs dizaines de milliers d’heures de vol cumulées, cette équipe vous fera bénéficier d’une expérience riche, irremplaçable et d’une formation pédagogique sans cesse renouvelée !
                            </p>
                            <p class="text"><span class="col-xs-1"></span> Ils vous brieferont, animeront vos cours théoriques et bien entendu seront à vos côtés pour vos premières heures de vol !</p>
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
    <nav class="footer navbar navbar-fixed-bottom hidden-xs" id="test">
        <div class="nav navbar-header">
            <a href="#top" class="navbar-brand glyphicon glyphicon-arrow-up"></a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#installation">installation</a></li>
            <li><a href="#flote">flote</a></li>
            <li><a href="#equipe">equipe</a></li>
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
            <li><a href="#installation">installation</a></li>
            <li><a href="#flote">flote</a></li>
            <li><a href="#equipe">equipe</a></li>
            <li><span class="col-xs-1"></span></li>
        </ul>
    </nav>
</body>


</html>
