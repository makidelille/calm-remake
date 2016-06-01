<!DOCTYPE html>
<html>

<head>
    <?php
        include("php/functions.php");
        echo head();
    ?>

</head>

<body class="nofooter">
<div id="site-container">
    <?php
            echo nav();
         ?>
        <div class="content">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 well">
                <div class="row">
                    <h1>Documents</h1>
                </div>
                <?php
                    echo content();
                ?>
            </div>
        </div>
    <?php
    echo copyright();
    ?>
    </div>
</body>


</html>
