<link rel="icon" type="image/x-icon" href="{{ asset('assetsAdmin/assets/img/favicon.ico') }}"/>
<link href="{{ asset('assetsAdmin/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assetsAdmin/assets/js/loader.js') }}"></script>

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
<link href="{{ asset('assetsAdmin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assetsAdmin/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{ asset('assetsAdmin/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assetsAdmin/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />

@stack('css')
