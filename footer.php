      <!-- /page content -->

      <footer>
        <div class="pull-right">
          A donde ir en la ciudad - by <a target="_blank" href="https://unbound-it.com">Unbound-IT, CodeBox & Agrestec</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/nprogress.js"></script>
    <script src="js/Chart.js/Chart.min.js"></script>
    <script src="js/gauge.js/gauge.min.js"></script>
    <script src="js/bootstrap/bootstrap-progressbar.min.js"></script>
    <script src="js/iCheck/icheck.min.js"></script>
    <script src="js/skycons/skycons.js"></script>
    <!-- morris.js -->
    <script src="js/raphael/raphael.min.js"></script>
    <script src="js/morris/morris.min.js"></script>
    <!-- Flot -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.pie.js"></script>
    <script src="js/flot/jquery.flot.time.js"></script>
    <script src="js/flot/jquery.flot.stack.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <!-- Flot pluins-->
    <script src="js/flot/plugins/jquery.flot.orderBars.js"></script>
    <script src="js/flot/plugins/jquery.flot.spline.min.js"></script>
    <script src="js/flot/plugins/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="js/DateJS/date.js"></script>
    <!-- JQVMap -->
    <script src="js/jqvmap/jquery.vmap.js"></script>
    <script src="js/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="js/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/min/moment.min.js"></script>
    <script src="js/bootstrap/daterangepicker.js"></script>
    <!-- validator -->
    <script src="js/validator/validator.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="js/jQuery-Smart-Wizard/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/xpull.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        if($('#admin_panel').length != 0){
          var data1 = [
            [gd(2012, 1, 1), 17],
            [gd(2012, 1, 2), 74],
            [gd(2012, 1, 3), 6],
            [gd(2012, 1, 4), 39],
            [gd(2012, 1, 5), 20],
            [gd(2012, 1, 6), 85],
            [gd(2012, 1, 7), 7]
          ];

          var data2 = [
            [gd(2012, 1, 1), 82],
            [gd(2012, 1, 2), 23],
            [gd(2012, 1, 3), 66],
            [gd(2012, 1, 4), 9],
            [gd(2012, 1, 5), 119],
            [gd(2012, 1, 6), 6],
            [gd(2012, 1, 7), 9]
          ];
          $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
            data1, data2
          ], {
            series: {
              lines: {
                show: false,
                fill: true
              },
              splines: {
                show: true,
                tension: 0.4,
                lineWidth: 1,
                fill: 0.4
              },
              points: {
                radius: 0,
                show: true
              },
              shadowSize: 2
            },
            grid: {
              verticalLines: true,
              hoverable: true,
              clickable: true,
              tickColor: "#d5d5d5",
              borderWidth: 1,
              color: '#fff'
            },
            colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
            xaxis: {
              tickColor: "rgba(51, 51, 51, 0.06)",
              mode: "time",
              tickSize: [1, "day"],
              //tickLength: 10,
              axisLabel: "Date",
              axisLabelUseCanvas: true,
              axisLabelFontSizePixels: 12,
              axisLabelFontFamily: 'Verdana, Arial',
              axisLabelPadding: 10
            },
            yaxis: {
              ticks: 8,
              tickColor: "rgba(51, 51, 51, 0.06)",
            },
            tooltip: false
          });

          function gd(year, month, day) {
            return new Date(year, month - 1, day).getTime();
          }
        }
      });
    </script>
    <!-- /Flot -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        if($('#admin_panel').length != 0){
          var options = {
            legend: false,
            responsive: false
          };

          new Chart(document.getElementById("canvas1"), {
            type: 'doughnut',
            tooltipFillColor: "rgba(51, 51, 51, 0.55)",
            data: {
              labels: [
                "Symbian",
                "Blackberry",
                "Other",
                "Android",
                "IOS"
              ],
              datasets: [{
                data: [15, 20, 30, 10, 30],
                backgroundColor: [
                  "#BDC3C7",
                  "#9B59B6",
                  "#E74C3C",
                  "#26B99A",
                  "#3498DB"
                ],
                hoverBackgroundColor: [
                  "#CFD4D8",
                  "#B370CF",
                  "#E95E4F",
                  "#36CAAB",
                  "#49A9EA"
                ]
              }]
            },
            options: options
          });
        }
      });
    </script>
    <!-- /Doughnut Chart -->

    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        if($('#admin_panel').length != 0){
          var cb = function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          };

          var optionSet1 = {
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2015',
            dateLimit: {
              days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
              'Last 7 Days': [moment().subtract(6, 'days'), moment()],
              'Last 30 Days': [moment().subtract(29, 'days'), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            },
            opens: 'left',
            buttonClasses: ['btn btn-default'],
            applyClass: 'btn-small btn-primary',
            cancelClass: 'btn-small',
            format: 'MM/DD/YYYY',
            separator: ' to ',
            locale: {
              applyLabel: 'Submit',
              cancelLabel: 'Clear',
              fromLabel: 'From',
              toLabel: 'To',
              customRangeLabel: 'Custom',
              daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
              monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
              firstDay: 1
            }
          };
          $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
          $('#reportrange').daterangepicker(optionSet1, cb);
          $('#reportrange').on('show.daterangepicker', function() {
            console.log("show event fired");
          });
          $('#reportrange').on('hide.daterangepicker', function() {
            console.log("hide event fired");
          });
          $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
          });
          $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
            console.log("cancel event fired");
          });
          $('#options1').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
          });
          $('#options2').click(function() {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
          });
          $('#destroy').click(function() {
            $('#reportrange').data('daterangepicker').remove();
          });
        }
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
    if($('#admin_panel').length != 0){
      var opts = {
        lines: 12,
        angle: 0,
        lineWidth: 0.4,
        pointer: {
            length: 0.75,
            strokeWidth: 0.042,
            color: '#1D212A'
        },
        limitMax: 'false',
        colorStart: '#1ABC9C',
        colorStop: '#1ABC9C',
        strokeColor: '#F0F3F3',
        generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    }
    </script>
    <!-- /gauge.js -->


    <script>
    /*if($('#socio_panel').length != 0){
      $(function() {
        Morris.Bar({
          element: 'graph_bar',
          data: [
            { "period": "Jan", "Hours worked": 80 },
            { "period": "Feb", "Hours worked": 125 },
            { "period": "Mar", "Hours worked": 176 },
            { "period": "Apr", "Hours worked": 224 },
            { "period": "May", "Hours worked": 265 },
            { "period": "Jun", "Hours worked": 314 },
            { "period": "Jul", "Hours worked": 347 },
            { "period": "Aug", "Hours worked": 287 },
            { "period": "Sep", "Hours worked": 240 },
            { "period": "Oct", "Hours worked": 211 }
          ],
          xkey: 'period',
          hideHover: 'auto',
          barColors: ['#26B99A', '#34495E', '#ACADAC', '#3498DB'],
          ykeys: ['Hours worked', 'sorned'],
          labels: ['Hours worked', 'SORN'],
          xLabelAngle: 60,
          resize: true
        });

        $MENU_TOGGLE.on('click', function() {
          $(window).resize();
        });
      });*/
    }
    </script>

    <!-- datepicker -->
    <script type="text/javascript">
    if($('#socio_panel').length != 0){
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          //alert("Callback has fired: [" + start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY') + ", label = " + label + "]");
        }

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    }
    </script>
    <!-- /datepicker -->
<!-- funciones del mapa de direciones -->
<script type="text/javascript">
var map;
//crear mapa
function initMap(lat,long) {
  if (lat==null||long==null) {
     lat = 25.5409967;
      long=-103.4349972;
  }//alert(lat+", "+long);
        var myLatLng = {lat:lat, lng: long};     
        var map = new google.maps.Map(document.getElementById('mapDir'), {
          center: myLatLng,
          scrollwheel: false,
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        // Crear posicion del marcador
        var marker = new google.maps.Marker({
          draggable: true,
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
 //posicion al arrastrar el marcador       
 google.maps.event.addListener(marker, 'drag', function(){
        $("#latDir").val(marker.getPosition().lat());
$("#lonDir").val(marker.getPosition().lng());
    });

      }
//funcion para calcular latitud y longitud por medio de la direccion
function geo(address){
      var geocoder = new google.maps.Geocoder();
if (address=='') {address='Bosque Venustiano Carranza, Torreón';}
var latitude;
var longitude;
geocoder.geocode( { 'address': address}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {

     latitude = results[0].geometry.location.lat();

      longitude = results[0].geometry.location.lng();
//console.log('La longitud es: ' + longitude + ', la latitud es: ' + latitude);
 initMap(latitude,longitude);
$("#latDir").val(latitude);
$("#lonDir").val(longitude);

    } 
});  
}
//
$("input[id*=Dir]").on('keyup',function(){
  if($(this).attr("id")!='cpDir'&&$(this).attr("id")!='latDir'&&$(this).attr("id")!='lonDir'&&$(this).attr("id")!='mapDir'){
    var address='';  
    for (var i = 1; i <= 5; i++) {
       if ($(".geo"+i).val()!='' && i!=1) { address+=','}
       address+=' '+ $(".geo"+i).val();
      }
      //alert(address);
      geo(address);
  }
  if ($(this).attr("id")=='latDir'||$(this).attr("id")=='lonDir') { if ($("#latDir").val()!=''&&$("#lonDir").val()!='') {
        initMap(parseFloat($("#latDir").val()),parseFloat($("#lonDir").val()));
      }
  }
});
//iniciador del mapa 
$("#direcciones-tab").on('click',function(){
  setTimeout( "initMap(null,null)", 200 );
});    
</script>
<!-- /funciones del mapa de direciones -->

  </body>
</html>
