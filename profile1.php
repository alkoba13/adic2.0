<?php
include ('header.php');
//autoloader para cargar clases
require_once(__DIR__.'/classes/autoloader.php');
require_once(__DIR__.'/config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;

?>
<?php include ('menu.php'); ?>
<main canvas="container" class="z-container noPadding scroll bgLightGrey p2r">

  <section class="z-container mainContainer">
    <div class="z-row">
      <div class="z-col-lg-4 z-col-md-4 z-col-sm-6 z-col-xs-12">
        <div class="z-panel z-forceBlock bgTransparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
          <div class="z-panelHeader noPadding noBorder">
            <div class="z-row noMargin">
              <div class="z-col-lg-3 z-col-md-3 z-col-sm-3 z-col-xs-4 noPadding">
                <div class="z-block h100 panelImg bgBlue">
                </div>
              </div>
              <div class="z-col-lg-9 z-col-md-9 z-col-sm-9 z-col-xs-8">
                <div class="z-block h100">
                  <div class="z-content z-contentTop">
                    <h3 class="noMargin text-uppercase text-bold text-uppercase s20">Nombre</h3>
                    <p class="noMargin cDark s15"><span class="fa fa-phone"></span> (871) 260 2226</p>
                    <p class="noMargin cDark s15"><span class="fa fa-phone"></span> (871) 347 7752</p>
                    <a class="s15 text-center cDark" type="button" data-toggle="modal" data-target="#mapModal">
                      <span class="fa fa-map-marker"></span> Ver Ubicacion
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="z-panelBody z-block overflowHidden noPadding hidden">
            <div class="clear"></div>
            <div class="z-block h100">
              <div class="z-content-fluid h50 bgOrange">

              </div>
              <div class="z-content-fluid h50 bgGreen">

              </div>
              <div class="z-content-fluid h50 bgRed">

              </div>
              <div class="z-content-fluid h50 bgBlue">

              </div>
            </div>
          </div>
          <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
            <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
              <span class="fa fa-share"></span>
            </a>
            <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
              <span class="fa fa-thumbs-up"></span>
            </a>
            <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
              <span class="fa fa-tag"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="z-col-lg-4 z-col-md-4 z-col-sm-6 z-col-xs-12">
        <div class="z-panel z-forceBlock bgTransparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
          <div id="carousel-example-generic" class="carousel slide h200 bgBlue" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="..." alt="...">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              <div class="item">
                <img src="..." alt="...">
                <div class="carousel-caption">
                  ...
                </div>
              </div>
              ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="z-col-lg-4 z-col-md-4 z-col-sm-6 z-col-xs-12">
        <div class="z-panel z-forceBlock bgTransparent wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
          <h2 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">Ofertas: Lunes</h2>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>

          <h2 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">Ofertas: Martes</h2>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>

          <h2 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">Ofertas: miercoles</h2>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>

          <h2 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">Ofertas: etc</h2>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>
          <div class="z-panel z-forceBlock bgTransparent  wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".2s">
            <a href="profile.php" class="z-panelBody z-block overflowHidden noPadding">
              <div id="" class="bgDarkBlueClear z-row h300 panelImg">
              </div>
              <div class="z-row noMargin">
                <div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">
                  <div class="z-block h100 mh100 overflowAuto">
                    <div class="z-content z-contentMiddle">
                      <p class="cDark s15 text-bold s15">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </a>
            <div class="z-panelFooter z-block h50 hidden overflowHidden noPadding bgDarkClear">
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-share"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-thumbs-up"></span>
              </a>
              <a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20">
                <span class="fa fa-tag"></span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
<nav class="profileSwitcher">
  <div class="z-block h50 bgBlue">
    <a role="button" href="profile1.php" class="z-content-fluid z-contentMiddle text-center s15 cWhite">
      Tipo 1
    </a>
    <a role="button" href="profile2.php" class="z-content-fluid z-contentMiddle text-center s15 cWhite">
      Tipo 2
    </a>
    <a role="button" href="profile3.php" class="z-content-fluid z-contentMiddle text-center s15 cWhite">
      Tipo 3
    </a>
  </div>
</nav>
<div class="modal fade bgWhite" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content noShadow noBorder bgTransparent">
      <div class="modal-header noPadding">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body noPadding">
        <iframe class="hFull" width="100%" height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48432.743731799295!2d-103.40225819823375!3d25.545530478674873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x868fdba9bb45b3fb%3A0x8bcc7a9970aea01d!2zVG9ycmXDs24sIENvYWgu!5e0!3m2!1ses!2smx!4v1475615763477" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<?php include ('footer.php'); ?>
