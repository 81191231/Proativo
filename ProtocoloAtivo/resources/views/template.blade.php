<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" manifest="demo.appcache">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ProAtivo - Sistema de Protocolo - Sejam, bem Vindo!</title>
  <link rel="shortcut icon" href="{{ URL::asset('img/logo2x2.png')}}"/>
  <!-- Bootstrap -->
  <link href="{{URL::asset('lib/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font <A HREF=""></A>wesome -->
  <link href="{{URL::asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{URL::asset('lib/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="{{URL::asset('lib/build/css/custom.min.css')}}" rel="stylesheet">
  <!--CSS-->
  <!--CHOSEN CSS-->
  <link rel="stylesheet" type="text/css" href="{{URL::asset('lib/chosen.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('lib/css.css')}}">

  <style type="text/css" media="all">
    /* fix rtl for demo */
    .chosen-rtl .chosen-drop { left: -9000px; }
  </style>
</head>

<body class="nav-md">


  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title"><span>Sistema de Protocolo</span></a>
          </div>




          <div class="clearfix"></div>

          <!-- menu de Informação do Usuario -->

          <div class="profile">
            <div class="profile_pic">
              <a href="{{URL::asset('Perfil')}}"></a><img src="{{URL::asset('img/user.png')}}" alt="Usuario" class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Sejam Bem Vindo,</span>
              <h2>Usuario</h2><br>
            </div>
          </div>
          <!-- /menu info de Usuario -->

          <br />

          <!-- sidebar menu Pricipal -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <div style="margin-left:4.6%;">
                <h4>Menu Geral</h4>
              </div>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Inicio <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{URL::asset('/')}}">Pagina Inicial</a></li>
                    <li><a href="{{URL::asset('Emitente/Novo')}}" alt="Novo Emitente" accesskey="u" data-toggle="tooltip" data-placement="right" title="Alt+U">Novo Usuário</a></li>
                    <li><a href="#">Sair</a></li>
                  </ul>
                </li>

                <!--Menu do Protocolo-->
                <li><a><i class="fa fa-edit"></i> Protocolo <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{URL::asset('Protocolo/Novo')}}" alt="Novo Protocolo = " accesskey="P" data-toggle="tooltip" data-placement="right" title="Alt+P">Novo</a></li>
                    <li><a href="{{URL::asset('Protocolo/Buscar')}}" alt="Buscar Protocolo" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+2">Buscar</a></li>
                    <li><a href="{{URL::asset('Protocolo/Listar')}}" alt="Listar Protocolos" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+3">Listar</a></li>
                  </ul>
                </li>

                <!--Menu do Emitente-->
                <li><a><i class="fa fa-envelope-o"></i> Emitente <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{URL::asset('Emitente/Buscar')}}"alt="Editar Emitente" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+5">Buscar</a></li>
                    <li><a href="{{URL::asset('Emitente/Listar')}}" alt="Listar Emitente" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+6">Listar</a></li>
                  </ul>
                </li>

                <!--Menu do Setor-->
                <li><a><i class="glyphicon glyphicon-folder-close"></i> Setor <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{URL::asset('Setor/Novo')}}" alt="Novo Setor" accesskey="" data-toggle="tooltip" data-placement="right" title="">Novo</a></li>
                    <li><a href="{{URL::asset('Setor/Listar')}}" alt="Listar Setor" accesskey="" data-toggle="tooltip" data-placement="right" title="">Listar</a></li>
                  </ul>
                </li>

                <!--Menu do Destino-->
                <li><a><i class="fa fa-location-arrow"></i> Destinatário <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{URL::asset('Destinatario/Novo')}}" alt="Novo Destinatário" accesskey="D" data-toggle="tooltip" data-placement="right" title="Alt+D">Novo</a></li>
                    <li><a href="{{URL::asset('Destinatario/Buscar')}}" alt="Editar Destinatário" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+8">Buscar</a></li>
                    <li><a href="{{URL::asset('Destinatario/Listar')}}" alt="Listar Destinatário" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+9">Listar</a></li>

                  </ul>
                </li>

                <!--Menu do Tipo de Documento-->
                <li><a><i class="glyphicon glyphicon-file"></i> Tipo de Documento <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="{{URL::asset('Tipo_documento/Novo')}}" alt="Novo Destinatário" accesskey="T" data-toggle="tooltip" data-placement="right" title="Alt+T">Novo</a></li>
                    <li><a href="{{URL::asset('Tipo_documento/Listar')}}" alt="Listar Destinatário" accesskey="" data-toggle="tooltip" data-placement="right" title="alt+r">Listar</a></li>
                  </ul>
                </li>

                <!--Menu Sobre-->
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-exclamation-circle"></i> Sobre <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{URL::asset('Informacoes')}}" accesskey="i" data-toggle="tooltip" data-placement="right" title="alt+M">Mais Informações</a></li>
                      <li><a href="{{URL::asset('Ajuda')}}" accesskey="a" data-toggle="tooltip" data-placement="right" title="alt+A">Ajudar</a></li>

                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!--Logo png-->
            <div class="img-thumbnail">
              <a href="{{URL::asset('www.proativo.net')}}"><img src="{{ URL::asset('img/logo2x2.png')}}" class="img-responsive"></a>
            </div>
            <!--fim de Logo-->
            <br><br><br>



            <!-- /menu footer-menu dos botoes do rotape -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Configuração">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Sair">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer-menu dos botoes do rotape  final-->
          </div>
        </div>




        <!-- top navigation Barra de Menu Vertical -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-exchange"><br><br>
                </i></a>

              </div>

            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- top navigation Barra de Menu Vertical fim do codigo -->


        @yield('content', 'Default Content')
        <!-- /page content fim da Pagina -->
        <div id="sectionUse">






        </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistema de <a href="{{URL::asset('bemvindo')}}">Protocolo Ativo</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>


      <script src="{{URL::asset('lib/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="{{URL::asset('lib/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <!-- FastClick -->
      <script src="{{URL::asset('lib/fastclick/lib/fastclick.js')}}" type="text/javascript"></script>

      <!-- iCheck -->
      <script src="{{URL::asset('lib/iCheck/icheck.min.js')}}" type="text/javascript"></script>

      <!-- Flot plugins -->
      <script src="{{URL::asset('lib/js/flot/jquery.flot.orderBars.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('lib/js/flot/date.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('lib/js/flot/jquery.flot.spline.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('lib/js/flot/curvedLines.js')}}" type="text/javascript"></script>

      <!-- bootstrap-daterangepicker -->
      <script src="{{URL::asset('lib/js/moment/moment.min.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('lib/js/datepicker/daterangepicker.js')}}" type="text/javascript"></script>

      <!-- Custom Theme Scripts -->
      <script src="{{URL::asset('lib/build/js/custom.min.js')}}" type="text/javascript"></script>

      <!-- Flot -->
      <script>
        $(document).ready(function() {
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
        });
      </script>
      <!-- /Flot -->

      <!-- jVectorMap -->
      <script>
        $(document).ready(function(){
          $('#world-map-gdp').vectorMap({
            map: 'world_mill_en',
            backgroundColor: 'transparent',
            zoomOnScroll: false,
            series: {
              regions: [{
                values: gdpData,
                scale: ['#E6F2F0', '#149B7E'],
                normalizeFunction: 'polynomial'
              }]
            },
            onRegionTipShow: function(e, el, code) {
              el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
          });
        });
      </script>
      <!-- /jVectorMap -->

      <!-- Skycons -->
      <script>
        $(document).ready(function() {
          var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
          "clear-day", "clear-night", "partly-cloudy-day",
          "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
          "fog"
          ],
          i;

          for (i = list.length; i--;)
            icons.set(list[i], list[i]);

          icons.play();
        });
      </script>
      <!-- /Skycons -->

      <!-- Doughnut Chart -->
      <script>
        $(document).ready(function(){
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
        });
      </script>
      <!-- /Doughnut Chart -->
      
      <!-- bootstrap-daterangepicker -->
      <script>
        $(document).ready(function() {

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
        });
      </script>
      <!-- /bootstrap-daterangepicker -->

      <!-- gauge.js -->
      <script>
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
      </script>
      <!-- /gauge.js -->
      <!--CHOSEN JS-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
      <script src="{{URL::asset('lib/chosen.jquery.js')}}" type="text/javascript"></script>
      <script src="{{URL::asset('lib/prism.js')}}" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
        var config = {
          '.chosen-select'           : {},
          '.chosen-select-deselect'  : {allow_single_deselect:true},
          '.chosen-select-no-single' : {disable_search_threshold:10},
          '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
          '.chosen-select-width'     : {width:"95%"}
        }
        for (var selector in config) {
          $(selector).chosen(config[selector]);
        }
      </script>
    </body>
    </html>