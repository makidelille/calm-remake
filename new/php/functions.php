<?php
/**
 * Created by PhpStorm.
 * User: Julien
 * Date: 30/05/2016
 * Time: 21:06
 */

function generateNav(){
    echo '<nav class="header navbar hidden-sm" data-spy=""" data-offset-top="00" role="navigation">
          <div class="navbar-header">
              <a href="index.php"><img src="img/LOGO_CALM-remake.png" alt=""" class="nopadding"></a>
          </div>
          <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="Faire_plaisir.php" class="dropdown-toggle" data-toggle="dropdown">Faire Plaisir <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="Club">
                      <li><a href="Faire_plaisir.php#bapteme">bapteme</a></li>
                      <li><a href="Faire_plaisir.php#volinit">vol d\'initiation</a></li>
                      <li><a href="Faire_plaisir.php#dejabrevete">deja breveté ?</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="Devenir_Pilote.php" class="dropdown-toggle" data-toggle="dropdown">Devenir Pilote <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="Club">
                      <li><a href="Devenir_Pilote.php#BB">Brevet de base</a></li>
                      <li><a href="Devenir_Pilote.php#PPL">PPL</a></li>
                      <li><a href="Devenir_Pilote.php#Qualif">Qualif possible</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="Pour_les_jeunes.php#" class="dropdown-toggle" data-toggle="dropdown">Pour les jeunes <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="Club">
                      <li><a href="Pour_les_jeunes.php#BIA">BIA</a></li>
                      <li><a href="Pour_les_jeunes.php#Bourses">bourses</a></li>
                  </ul>
              </li>
              <li class="dropdown">
                  <a href="Club.php#" class="dropdown-toggle" data-toggle="dropdown">Club <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="Club.php#installation">installation</a></li>
                      <li><a href="Club.php#flote">Flote</a></li>
                      <li><a href="Club.php#equipe">L\'equipe</a></li>
                      <li><a href="Club.php#contact">Contact et acces</a></li>
                  </ul>
              </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li>
                  <a href="galerie.php"> <span class="glyphicon glyphicon-picture"></span></a>
              </li>
              <li><a href="http://calm.openflyers.fr/"><span class="glyphicon glyphicon-plane"></span></a></li>
              <li><a href="Documents.php"><span class="glyphicon glyphicon-duplicate"></span></a></li>
              <li><a href="contact.php"><span class="glyphicon glyphicon-info-sign"></span></a></li>
          </ul>
      </nav>
      <nav class="header navbar visible-sm" role="navigation">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=""#navbar_xs">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="glyphicon glyphicon-menu-hamburger"></span>
              </button>
              <a href="index.php" class="navbar-brand nopadding"><img src="img/LOGO_CALM-remake.png" class=""" /></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar_xs">
              <ul class="nav navbar-nav">
                  <li class="dropdown">
                      <a href="Faire_plaisir.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-right"></span> Faire Plaisir </a>
                      <ul class="dropdown-menu" role="Club">
                          <li><a href="Faire_plaisir.php#bapteme">bapteme</a></li>
                          <li><a href="Faire_plaisir.php#volinit">vol d\'initiation</a></li>
                          <li><a href="Faire_plaisir.php#dejabrevete">deja breveté ?</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="Devenir_Pilote.php" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-right"></span> Devenir Pilote </a>
                      <ul class="dropdown-menu" role="Club">
                          <li><a href="Devenir_Pilote.php#BB">Brevet de base</a></li>
                          <li><a href="Devenir_Pilote.php#PPL">PPL</a></li>
                          <li><a href="Devenir_Pilote.php#Qualif">Qualif possible</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="Pour_les_jeunes.php#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-right"></span> Pour les jeunes </a>
                      <ul class="dropdown-menu" role="Club">
                          <li><a href="Pour_les_jeunes.php#BIA">BIA</a></li>
                          <li><a href="Pour_les_jeunes.php#Bourses">bourses</a></li>
                      </ul>
                  </li>
                  <li class="dropdown">
                      <a href="Club.php#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-menu-right"></span> Club</a>
                      <ul class="dropdown-menu" role="menu">
                          <li><a href="Club.php#installation">installation</a></li>
                          <li><a href="Club.php#flote">Flote</a></li>
                          <li><a href="Club.php#equipe">L\'equipe</a></li>
                          <li><a href="Club.php#contact">Contact et acces</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="galerie.php">
                          <span class="glyphicon glyphicon-picture"></span> Photos
                      </a>
                  </li>
                  <li>
                      <a href="http://calm.openflyers.fr/">
                          <span class="glyphicon glyphicon-plane"></span> OpenFlyers
                      </a>
                  </li>
                  <li>
                      <a href="Documents.php">
                          <span class="glyphicon glyphicon-duplicate"></span> Documents
                      </a>
                  </li>
                  <li>
                      <a href="contact.php">
                          <span class="glyphicon glyphicon-info-sign"></span> Infos
                      </a>
                  </li>

              </ul>
          </div>
      </nav>';
}

function generateCarousel(){
    echo '<div class="row">
                    <div id="press_carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#press_carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#press_carousel" data-slide-to="1"></li>
                            <li data-target="#press_carousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <a href="Faire_plaisir.php#bapteme">
                                <img src="img/Baptmes.jpg" class=" img-rounded center-block"></a>
                            </div>
                            <div class="item">
                            <a href="Faire_plaisir.php#volinit">
                                <img src="img/VolInitiation_re.JPG" class=" img-rounded center-block"></a>
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
                </div>';
}

