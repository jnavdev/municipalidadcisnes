<!DOCTYPE html lang="es">
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>Municipalidad de Cisnes | @yield('title', 'Panel de Administración')</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="#">
  <meta name="author" content="#">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/skin/default_skin/css/theme.css') }}">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/admin-tools/admin-forms/css/admin-forms.css') }}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/admin/assets/img/favicon.ico') }}">

  <!-- Required Plugin CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/plugins/tagmanager/tagmanager.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/plugins/daterange/daterangepicker.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/plugins/datepicker/css/bootstrap-datetimepicker.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/plugins/colorpicker/css/bootstrap-colorpicker.min.css') }}">

  <!-- Dropzone CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/vendor/plugins/dropzone/css/dropzone.css') }}">

  <link href="{{ asset('assets/admin/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css">

  <!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/plugins/datatables/media/css/dataTables.bootstrap.css') }}">

  <!-- Datatables Addons CSS -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendor/plugins/datatables/media/css/dataTables.plugins.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body class="dashboard-page sb-l-o sb-r-c">

<!-- Start: Main -->
<div id="main">
  <header class="navbar navbar-fixed-top">
    <div class="navbar-branding">
      <a class="navbar-brand" href="{{ url('/admin') }}">
        <b>Cisnes</b>
      </a>
      <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="{{ asset('assets/admin/assets/img/avatars/1.jpg') }}" alt="avatar" class="mw30 br64 mr15"> {{ Auth::user()->name }}
          <span class="caret caret-tp hidden-xs"></span>
        </a>
        <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
          <li class="dropdown-footer">
            <a href="{{ url('/logout') }}" class="">
              <span class="fa fa-power-off pr5"></span> Cerrar sesión </a>
          </li>
        </ul>
      </li>
    </ul>
  </header>

  <!-- Start: Sidebar Left -->
  <aside id="sidebar_left" class="nano nano-primary affix">

    <!-- Start: Sidebar Left Content -->
    <div class="sidebar-left-content nano-content">

      <!-- Start: Sidebar Header -->
      <header class="sidebar-header">

        <!-- Sidebar Widget - Menu (Slidedown) -->
        <div class="sidebar-widget menu-widget">
          <div class="row text-center mbn">
            <div class="col-xs-4">
              <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                <span class="glyphicon glyphicon-inbox"></span>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                <span class="glyphicon glyphicon-bell"></span>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                <span class="fa fa-desktop"></span>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="fa fa-gears"></span>
              </a>
            </div>
            <div class="col-xs-4">
              <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                <span class="fa fa-flask"></span>
              </a>
            </div>
          </div>
        </div>

        <!-- Sidebar Widget - Author (hidden)  -->
        <div class="sidebar-widget author-widget hidden">
          <div class="media">
            <a class="media-left" href="#">
              <img src="{{ asset('assets/admin/assets/img/avatars/3.jpg') }}" class="img-responsive">
            </a>
            <div class="media-body">
              <div class="media-links">
                <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
              </div>
              <div class="media-author">Michael Richards</div>
            </div>
          </div>
        </div>

        <!-- Sidebar Widget - Search (hidden) -->
        <div class="sidebar-widget search-widget hidden">
          <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
            <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
          </div>
        </div>

      </header>
      <!-- End: Sidebar Header -->

      <!-- Start: Sidebar Left Menu -->
      <ul class="nav sidebar-menu">
        <li class="sidebar-label pt20">Menú</li>
        <li>
          <a href="{{ url('/admin') }}">
            <span class="fa fa-home"></span>
            <span class="sidebar-title">Inicio</span>
            <span class="sidebar-title-tray"></span>
          </a>
        </li>
        @foreach (Auth::user()->permissions()->get() as $permission)
          <li>
            <a href="{{ route($permission->route_name . '.index') }}">
              <span class="{{ $permission->icon }}"></span>
              <span class="sidebar-title">{{ $permission->name }}</span>
              <span class="sidebar-title-tray"></span>
            </a>
          </li>
        @endforeach
      </ul>
      <!-- End: Sidebar Menu -->
    </div>
    <!-- End: Sidebar Left Content -->

  </aside>
  <!-- End: Sidebar Left -->

  <!-- Start: Content-Wrapper -->
  <section id="content_wrapper">

    <!-- Start: Topbar-Dropdown -->
    <div id="topbar-dropmenu">
      <div class="topbar-menu row">
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="metro-tile">
            <span class="glyphicon glyphicon-inbox"></span>
            <span class="metro-title">Messages</span>
          </a>
        </div>
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="metro-tile">
            <span class="glyphicon glyphicon-user"></span>
            <span class="metro-title">Users</span>
          </a>
        </div>
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="metro-tile">
            <span class="glyphicon glyphicon-headphones"></span>
            <span class="metro-title">Support</span>
          </a>
        </div>
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="metro-tile">
            <span class="fa fa-gears"></span>
            <span class="metro-title">Settings</span>
          </a>
        </div>
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="metro-tile">
            <span class="glyphicon glyphicon-facetime-video"></span>
            <span class="metro-title">Videos</span>
          </a>
        </div>
        <div class="col-xs-4 col-sm-2">
          <a href="#" class="metro-tile">
            <span class="glyphicon glyphicon-picture"></span>
            <span class="metro-title">Pictures</span>
          </a>
        </div>
      </div>
    </div>
    <!-- End: Topbar-Dropdown -->

    @yield('content')


  </section>
  <!-- End: Content-Wrapper -->

  <!-- Begin: Page Footer -->
  <footer id="content-footer">
    <div class="row">
      <div class="col-md-6">
        <span class="footer-legal">© {{ Carbon\Carbon::now()->year }}. Municipalidad de Cisnes.</span>
      </div>
      <div class="col-md-6 text-right">
        <a href="#content" class="footer-return-top">
          <span class="fa fa-arrow-up"></span>
        </a>
      </div>
    </div>
  </footer>
  <!-- End: Page Footer -->

  <!-- Start: Right Sidebar -->
  <aside id="sidebar_right" class="nano affix">

    <!-- Start: Sidebar Right Content -->
    <div class="sidebar-right-content nano-content">

      <div class="tab-block sidebar-block br-n">
        <ul class="nav nav-tabs tabs-border nav-justified hidden">
          <li class="active">
            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
          </li>
          <li>
            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
          </li>
          <li>
            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
          </li>
        </ul>
        <div class="tab-content br-n">
          <div id="sidebar-right-tab1" class="tab-pane active">

            <h5 class="title-divider text-muted mb20"> Server Statistics
              <span class="pull-right"> 2013
                  <i class="fa fa-caret-down ml5"></i>
                </span>
            </h5>
            <div class="progress mh5">
              <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                <span class="fs11">DB Request</span>
              </div>
            </div>
            <div class="progress mh5">
              <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                <span class="fs11 text-left">Server Load</span>
              </div>
            </div>
            <div class="progress mh5">
              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                <span class="fs11 text-left">Server Connections</span>
              </div>
            </div>

            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
            <div class="row">
              <div class="col-xs-5">
                <h3 class="text-primary mn pl5">132</h3>
              </div>
              <div class="col-xs-7 text-right">
                <h3 class="text-success-dark mn">
                  <i class="fa fa-caret-up"></i> 13.2% </h3>
              </div>
            </div>

            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
            <div class="row">
              <div class="col-xs-5">
                <h3 class="text-primary mn pl5">212</h3>
              </div>
              <div class="col-xs-7 text-right">
                <h3 class="text-success-dark mn">
                  <i class="fa fa-caret-up"></i> 25.6% </h3>
              </div>
            </div>

            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
            <div class="row">
              <div class="col-xs-5">
                <h3 class="text-primary mn pl5">82.5</h3>
              </div>
              <div class="col-xs-7 text-right">
                <h3 class="text-danger mn">
                  <i class="fa fa-caret-down"></i> 17.9% </h3>
              </div>
            </div>

            <h5 class="title-divider text-muted mt40 mb20"> User Activity
              <span class="pull-right text-primary fw600">1 Hour</span>
            </h5>

            <div class="media">
              <a class="media-left" href="#">
                <img src="{{ asset('assets/admin/assets/img/avatars/6.jpg') }}" class="mw40 br64" alt="holder-img">
              </a>
              <div class="media-body">
                <h5 class="media-heading">Article
                  <small class="text-muted">- 08/16/22</small>
                </h5>Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{ asset('assets/admin/assets/img/avatars/4.jpg') }}" class="mw40 br64" alt="holder-img">
              </a>
              <div class="media-body">
                <h5 class="media-heading">Richard
                  <small class="text-muted">@cloudesigns</small>
                  <small class="pull-right text-muted">6h</small>
                </h5>Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{ asset('assets/admin/assets/img/avatars/3.jpg') }}" class="mw40 br64" alt="holder-img">
              </a>
              <div class="media-body">
                <h5 class="media-heading">1,610 kcal
                  <span class="fa fa-caret-down text-primary pl5"></span>
                </h5>Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{ asset('assets/admin/assets/img/avatars/2.jpg') }}" class="mw40 br64" alt="holder-img">
              </a>
              <div class="media-body">
                <h5 class="media-heading">1,610 kcal
                  <span class="label label-xs label-system ml5">Featured</span>
                </h5>Updated 36 days ago by
                <a class="text-system" href="#"> Max </a>
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{ asset('assets/admin/assets/img/avatars/5.jpg') }}" class="mw40 br64" alt="holder-img">
              </a>
              <div class="media-body">
                <h5 class="media-heading">1,610 kcal</h5>
                Updated ago by
                <a class="text-system" href="#"> Max </a>
              </div>
              <a class="media-right pl30" href="#">
                <span class="fa fa-pencil text-muted mb5"></span>
                <br>
                <span class="fa fa-remove text-danger-light"></span>
              </a>
            </div>
          </div>
          <div id="sidebar-right-tab2" class="tab-pane"></div>
          <div id="sidebar-right-tab3" class="tab-pane"></div>
        </div>
        <!-- end: .tab-content -->
      </div>

    </div>
  </aside>
  <!-- End: Right Sidebar -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('assets/admin/vendor/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

<!-- HighCharts Plugin -->
<script src="{{ asset('assets/admin/vendor/plugins/highcharts/highcharts.js') }}"></script>

<!-- Sparklines Plugin -->
<script src="{{ asset('assets/admin/vendor/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Simple Circles Plugin -->
<script src="{{ asset('assets/admin/vendor/plugins/circles/circles.js') }}"></script>

<!-- JvectorMap Plugin + US Map (more maps in plugin/assets folder) -->
<script src="{{ asset('assets/admin/vendor/plugins/jvectormap/jquery.jvectormap.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js') }}"></script>

<!-- Theme Javascript -->
<script src="{{ asset('assets/admin/assets/js/utility/utility.js') }}"></script>
<script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

<!-- FileUpload Plugin -->
<script src="{{ asset('assets/admin/vendor/plugins/fileupload/fileupload.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/plugins/holder/holder.min.js') }}"></script>

<!-- Ckeditor Plugin -->
<script src="{{ asset('assets/admin/vendor/plugins/ckeditor/ckeditor.js') }}"></script>

<!-- Time/Date Plugin Dependencies -->
<script src="{{ asset('assets/admin/vendor/plugins/globalize/globalize.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/plugins/moment/moment.min.js') }}"></script>

<!-- DateTime Plugin -->
<script src="{{ asset('assets/admin/vendor/plugins/datepicker/js/bootstrap-datetimepicker.js') }}"></script>

<!-- Dropzone JS -->
<script src="{{ asset('assets/admin/vendor/plugins/dropzone/dropzone.min.js') }}"></script>

<script src="{{ asset('assets/admin/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>

<!-- Datatables -->
<script src="{{ asset('assets/admin/vendor/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>

<!-- Datatables Tabletools addon -->
<script src="{{ asset('assets/admin/vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js') }}"></script>

<!-- Datatables ColReorder addon -->
<script src="{{ asset('assets/admin/vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js') }}"></script>

<!-- Datatables Bootstrap Modifications  -->
<script src="{{ asset('assets/admin/vendor/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>

<!-- Widget Javascript -->
<script type="text/javascript">
  jQuery(document).ready(function() {
    "use strict";

    // Init Theme Core
    Core.init();

    // Init Widget Demo JS
    // demoHighCharts.init();

    // Because we are using Admin Panels we use the OnFinish
    // callback to activate the demoWidgets. It's smoother if
    // we let the panels be moved and organized before
    // filling them with content from various plugins

    // Init plugins used on this page
    // HighCharts, JvectorMap, Admin Panels

    // Init Admin Panels on widgets inside the ".admin-panels" container
    $('.admin-panels').adminpanel({
      grid: '.admin-grid',
      draggable: true,
      preserveGrid: true,
      mobile: false,
      onStart: function() {
        // Do something before AdminPanels runs
      },
      onFinish: function() {
        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
      },
      onSave: function() {
        $(window).trigger('resize');
      }
    });

    // Widget VectorMap
    function runVectorMaps() {

      // Jvector Map Plugin
      var runJvectorMap = function() {
        // Data set
        var mapData = [900, 700, 350, 500];
        // Init Jvector Map
        $('#WidgetMap').vectorMap({
          map: 'us_lcc_en',
          //regionsSelectable: true,
          backgroundColor: 'transparent',
          series: {
            markers: [{
              attribute: 'r',
              scale: [3, 7],
              values: mapData
            }]
          },
          regionStyle: {
            initial: {
              fill: '#E5E5E5'
            },
            hover: {
              "fill-opacity": 0.3
            }
          },
          markers: [{
            latLng: [37.78, -122.41],
            name: 'San Francisco,CA'
          }, {
            latLng: [36.73, -103.98],
            name: 'Texas,TX'
          }, {
            latLng: [38.62, -90.19],
            name: 'St. Louis,MO'
          }, {
            latLng: [40.67, -73.94],
            name: 'New York City,NY'
          }],
          markerStyle: {
            initial: {
              fill: '#a288d5',
              stroke: '#b49ae0',
              "fill-opacity": 1,
              "stroke-width": 10,
              "stroke-opacity": 0.3,
              r: 3
            },
            hover: {
              stroke: 'black',
              "stroke-width": 2
            },
            selected: {
              fill: 'blue'
            },
            selectedHover: {}
          }
        });
        // Manual code to alter the Vector map plugin to
        // allow for individual coloring of countries
        var states = ['US-CA', 'US-TX', 'US-MO',
          'US-NY'
        ];
        var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
        var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
        $.each(states, function(i, e) {
          $("#WidgetMap path[data-code=" + e + "]").css({
            fill: colors[i]
          });
        });
        $('#WidgetMap').find('.jvectormap-marker')
                .each(function(i, e) {
                  $(e).css({
                    fill: colors2[i],
                    stroke: colors2[i]
                  });
                });
      };

      if ($('#WidgetMap').length) {
        runJvectorMap();
      }
    }
  });
</script>
@yield('scripts')

<!-- END: PAGE SCRIPTS -->

</body>

</html>
