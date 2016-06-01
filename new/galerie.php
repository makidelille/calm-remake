<!DOCTYPE html>
<html>

<head>
    <title>Galerie</title>
    <?php
        include("php/functions.php");
        generateHeader();
    ?>

    <!-- galerie specific -->
    <link rel="stylesheet" href="css/galerie.css">
    <script src="js/galerie.js"></script>


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
        <?php
            generateCopyright();
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
