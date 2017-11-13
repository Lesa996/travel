@extends('layouts.appTwo')
@section('content')
    @push('meta')
    @endpush

    @push('stylesheets')
        <!-- Favicon-->
        <link rel="icon" href="admin/favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="{{url('admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="{{url('admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="{{url('admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="{{url('admin/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="{{url('admin/css/style.css')}}" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{url('admin/css/themes/all-themes.css')}}" rel="stylesheet" />
    @endpush

    <div class="container-fluid">
        <div class="block-header">
            <h2>Lista Smestaja</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <img class="img-responsive" src="{{url('images/pexels-photo-221532.jpeg')}}">
                    </div>
                    <div class="header bg-green">
                        <h2>
                            Putovanje Grcka <small>Description text here...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{url('app/kreiraj/smestaj')}}">Kreiraj</a></li>
                                    <li><a href="{{url('app/edit/smestaj')}}">Edit</a></li>
                                    <li><a href="javascript:void(0);">Arhiva</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>







    @push('scripts')
        <!-- Jquery Core Js -->
        <script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>

        <!-- Bootstrap Core Js -->
        <script src="{{url('admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

        <!-- Select Plugin Js -->
        <script src="{{url('admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="{{url('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="{{url('admin/plugins/node-waves/waves.js')}}"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="{{url('admin/plugins/jquery-countto/jquery.countTo.js')}}"></script>

        <!-- Morris Plugin Js -->
        <script src="{{url('admin/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{url('admin/plugins/morrisjs/morris.js')}}"></script>

        <!-- ChartJs -->
        <script src="{{url('admin/plugins/chartjs/Chart.bundle.js')}}"></script>

        <!-- Flot Charts Plugin Js -->
        <script src="{{url('admin/plugins/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{url('admin/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
        <script src="{{url('admin/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
        <script src="{{url('admin/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
        <script src="{{url('admin/plugins/flot-charts/jquery.flot.time.js')}}"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="{{url('admin/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

        <!-- Custom Js -->
        <script src="{{url('admin/js/admin.js')}}"></script>
        <script src="{{url('admin/js/pages/index.js')}}"></script>

        <!-- Demo Js -->
        <script src="{{url('admin/js/demo.js')}}"></script>
    @endpush
@endsection