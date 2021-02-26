<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Municipalidad de Cisnes | Entrar</title>
    <meta name="keywords" content="Municipalidad de Cisnes" />
    <meta name="description" content="Municipalidad de Cisnes">
    <meta name="author" content="Municipalidad de Cisnes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/skin/default_skin/css/theme.css') }}">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/admin-tools/admin-forms/css/admin-forms.css') }}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/admin/assets/img/favicon.ico') }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="external-page external-alt sb-l-c sb-r-c">

<!-- Start: Main -->
<div id="main" class="animated fadeIn">

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Begin: Content -->
        <section id="content">

            <div class="admin-form theme-info mw500" id="login">

                <!-- Login Logo -->
                <div class="row table-layout">
                    <div class="text-center">
                        <h3>Municipalidad de Cisnes</h3>
                    </div>
                </div>

                <!-- Login Panel/Form -->
                <div class="panel mt30 mb25">
                    @include('admin.partials.errors')
                    <form role="form" method="POST" action="{{ url('/login') }}" id="contact">
                        {{ csrf_field() }}
                        <div class="panel-body bg-light p25 pb15">

                            <!-- Username Input -->
                            <div class="section">
                                <label for="email" class="field-label text-muted fs18 mb10">Correo electrónico</label>
                                <label for="email" class="field prepend-icon">
                                    <input autofocus type="email" name="email" id="email" class="gui-input" placeholder="Ingrese su correo electrónico">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                            </div>

                            <!-- Password Input -->
                            <div class="section">
                                <label for="password" class="field-label text-muted fs18 mb10">Contraseña</label>
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" class="gui-input" placeholder="Ingrese su contraseña">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                            </div>

                        </div>

                        <div class="panel-footer clearfix">
                            <button type="submit" class="button btn-primary mr10 pull-right">Entrar</button>
                            <label class="switch ib switch-primary mt10">
                                <input type="checkbox" name="remember" id="remember" checked>
                                <label for="remember" data-on="SI" data-off="NO"></label>
                                <span>Recordarme</span>
                            </label>
                        </div>

                    </form>
                </div>
            </div>
        </section>
        <!-- End: Content -->
    </section>
    <!-- End: Content-Wrapper -->
</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('assets/admin/vendor/jquery/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/vendor/jquery/jquery_ui/jquery-ui.min.js') }}"></script>

<!-- Theme Javascript -->
<script src="{{ asset('assets/admin/assets/js/utility/utility.js') }}"></script>

<script src="{{ asset('assets/admin/assets/js/main.js') }}"></script>

<!-- Page Javascript -->
<script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>

