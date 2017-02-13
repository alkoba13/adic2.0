function createpost(title, description, user, date, category, image, user_pic) {
  var module = '<div class="z-panel z-forceBlock bgWhite wow fadeInUp boxShadow" data-wow-duration=".5s" data-wow-delay=".2s">'+
    '<div class="z-panelHeader noPadding noBorder">'+
      '<div class="z-row noMargin">'+
       '<div class="z-col-lg-3 z-col-md-3 z-col-sm-3 z-col-xs-3 noPadding">'+
          '<div class="z-block h70">'+
            '<a href="profile1.php" class="z-content z-contentMiddle">'+
              '<div class="profileImg panelImg" style="background-image:url(' +user_pic+ ')">'+
              '</div>'+
            '</a>'+
          '</div>'+
        '</div>'+
        '<div class="z-col-lg-9 z-col-md-9 z-col-sm-9 z-col-xs-7 noPadding">'+
          '<div class="z-block h70">'+
            '<div class="z-content z-contentMiddle">'+
              '<form action="profile2.php" method="post" >'+
                '<button name="useridx" class="noMargin text-uppercase text-uppercase s15 cDark text-bold profileU noBorder bgTransparent noPadding">'+title+'</a>'+
              '</form>'+
              '<p class="noMargin cDark">Calle fulana #45, Centro. Torreón, Coahuila. Fecha: '+date+'</p>'+
            '</div>'+
          '</div>'+
        '</div>'+
        '<div class="z-col-lg-3 z-col-md-3 z-col-sm-2 z-col-xs-2 noPadding">'+
          '<div class="z-block h70">'+
            '<div class="z-content z-contentMiddle text-center">'+
              '<span class="fa fa-star-o s20 cGrey"></span>'+
            '</div>'+
          '</div>'+
        '</div>'+
      '</div>'+
    '</div>'+
    '<div class="z-panelBody z-block overflowHidden noPadding">'+
      '<div id="" class="bgDarkBlueClear ofertaImg panelImg" style="background-image:url('+image+')">'+
      '</div>'+
      '<div class="z-row noMargin">'+
        '<div class="z-col-lg-12 z-col-md-12 z-col-sm-12 z-col-xs-12 bgTransparent">'+
          '<div class="z-block h100 mh100 overflowAuto">'+
            '<div class="z-content z-contentMiddle">'+
              '<p class="cDark s15">'+
              '<span class="text-bold text-uppercase">'+user+' </span>'+
              '<span class="">'+category+' </span>'+
              '<br>'+
               description+
              '</p>'+
            '</div>'+
          '</div>'+
        '</div>'+
      '</div>'+
    '</div>'+
    '<div class="z-panelFooter z-block h40 overflowHidden noPadding bgTransparent ">'+
      '<a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20 noBorder">'+
        '<span class="fa fa-share"></span>'+
      '</a>'+
      '<a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20 noBorder">'+
        '<span class="fa fa-thumbs-up"></span>'+
      '</a>'+
      '<a role="button" class="z-content-fluid z-contentMiddle z-btn cGrey text-center s20 noBorder">'+
        '<span class="fa fa-tag"></span>'+
      '</a>'+
    '</div>'+
  '</div>'+
  '<div class="clear"></div>';
  return module;
}

function createList(id, name) {
    var option = '<option value="'+id+'">'+name+'</option>';
    return option;
}
