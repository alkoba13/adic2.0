<?php
include ('header.php');
//autoloader para cargar clases
require_once(__DIR__.'/classes/autoloader.php');
require_once(__DIR__.'/config.php');

//invocacion de clases
use pdomysql AS pdomysql;
use user AS user;

?>
<main canvas="container" class="z-container noPadding scroll bgLightGrey p2r">
  <section class="z-container mainContainer noPadding">
    <div class="clear h50"></div>
    <div class="z-row noMargin">
      <div class="z-col-lg-4 z-col-md-4 z-col-sm-6 z-col-xs-12">
        <div class="z-forceBlock bgTransparent noMargin boxShadow">
          <div class="z-block panelImg bgDarkBlue h100vw" style="background-image:url('images/profile/01.png')">
          </div>
          <div class="z-block h10vh bgDarkClear">
            <div class="z-content z-contentMiddle text-center">
              <h3 class="noMargin text-uppercase text-bold text-center cWhite">Negocio</h3>
              <a class="s15 text-center cLightBlue" type="button" data-toggle="modal" data-target="#mapModal">
                <span class="fa fa-map-marker"></span> Ver Ubicacion
              </a>
            </div>
          </div>
          <div class="z-block h20vh bgWhite">
            <div data-role="collapsibleset" data-theme="a" data-content-theme="a">
              <div data-role="collapsible">
                <h3>Section 1</h3>
              <p>I'm the collapsible content for section 1</p>
              </div>
              <div data-role="collapsible">
                <h3>Section 2</h3>
              <p>I'm the collapsible content for section 2</p>
              </div>
              <div data-role="collapsible">
                <h3>Section 3</h3>
              <p>I'm the collapsible content for section 3</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
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
