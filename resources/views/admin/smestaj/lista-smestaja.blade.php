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

        <!-- Multi Select Css -->
        <link href="{{url('admin/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">

        <!-- Custom Css -->
        <link href="{{url('admin/css/style.css')}}" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="{{url('admin/css/themes/all-themes.css')}}" rel="stylesheet" />
    @endpush

    <div class="container-fluid">
        <div class="block-header">
            <h2>
                Lista Smestaja

                <a href="{{url('app/kreiraj/smestaj')}}" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                    <i class="material-icons">add</i>
                </a>
            </h2>

        </div>
        <!-- Multi Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Slajder pocetne strane
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/smestaj/slajder')}}" method="POST" >
                            {!! csrf_field() !!}
                            <select id="optgroup" class="ms" multiple="multiple" name="slajder[]">
                                @foreach($smestaji as $smestaj)
                                    @if($smestaj->slajder == "1")
                                        <option value="{{$smestaj->id}}" selected>{{$smestaj->naziv}}</option>
                                    @else
                                        <option value="{{$smestaj->id}}" >{{$smestaj->naziv}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Multi Select -->
        <div class="row clearfix">
            @foreach($smestaji as $smestaj)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <img class="img-responsive" src="{{url($smestaj->cover->url)}}">
                    </div>
                    <div class="header bg-green">
                        <h2>
                            {{$smestaj->naziv}} <small>{{str_limit($smestaj->opis->kratak_opis, $limit = 20, $end = '...')}}...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{url('app/kreiraj/smestaj')}}">Kreiraj</a></li>
                                    <li><a href="{{url('app/edit/smestaj/'.$smestaj->id)}}">Edit</a></li>
                                    <li><a href="{{url('app/delete/smestaj/'.$smestaj->id)}}">Izbrisi</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            @endforeach
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

        <!-- Multi Select Plugin Js -->
        <script src="{{url('admin/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

        <!-- Custom Js -->
        <script src="{{url('admin/js/admin.js')}}"></script>
        <script src="{{url('admin/js/pages/index.js')}}"></script>

        <!-- Demo Js -->
        <script src="{{url('admin/js/demo.js')}}"></script>

        <script>
            $('#optgroup').multiSelect();
        </script>
    @endpush
@endsection