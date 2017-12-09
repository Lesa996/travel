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
                Lista Putovanja

                <a href="{{url('app/kreiraj/putovanje')}}" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
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
                            Header Slajder Pocetne Strane
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/putovanje/slajder/glavni')}}" method="POST" >
                            {!! csrf_field() !!}
                            <select id="header_slajder" class="ms" multiple="multiple" name="slajder[]">
                                @foreach($putovanja as $putovanje)
                                    @if($putovanje->glavni_slajder == "1")
                                        <option value="{{$putovanje->id}}" selected>{{$putovanje->naziv}}</option>
                                    @else
                                        <option value="{{$putovanje->id}}" >{{$putovanje->naziv}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Slajder Pocetne Strane
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/putovanje/slajder/sporedni')}}" method="POST" >
                            {!! csrf_field() !!}
                            <select id="other_slajder" class="ms" multiple="multiple" name="slajder[]">
                                @foreach($putovanja as $putovanje)
                                    @if($putovanje->slajder == "1")
                                        <option value="{{$putovanje->id}}" selected>{{$putovanje->naziv}}</option>
                                    @else
                                        <option value="{{$putovanje->id}}" >{{$putovanje->naziv}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Last Minute
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/putovanje/slajder/sporedni')}}" method="POST" >
                            {!! csrf_field() !!}
                            <select id="last_slajder" class="ms" multiple="multiple" name="slajder[]">
                                @foreach($putovanja as $putovanje)
                                    @if($putovanje->slajder == "1")
                                        <option value="{{$putovanje->id}}" selected>{{$putovanje->naziv}}</option>
                                    @else
                                        <option value="{{$putovanje->id}}" >{{$putovanje->naziv}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Redosled Prikaza Putovanja
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/putovanje/redosled')}}" method="POST" >
                            {!! csrf_field() !!}
                            <input type="hidden" name="multiple_value" id="multiple_value"  />
                            <select id="redosled" class="ms" multiple="multiple" name="redosled[]">

                                @foreach($putovanja->sortByDesc('redosled') as $putovanje)
                                    @if($putovanje->redosled != 0)
                                        <option value="{{$putovanje->id}}" selected>{{$putovanje->naziv}}</option>
                                    @else
                                        <option value="{{$putovanje->id}}" >{{$putovanje->naziv}}</option>
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
            @foreach($putovanja as $putovanje)
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="body">
                        <img class="img-responsive" src="{{url($putovanje->cover->url)}}">
                    </div>
                    <div class="header bg-green">
                        <h2>
                            {{$putovanje->naziv}} <small>{{str_limit($putovanje->opis->kratak_opis, $limit = 20, $end = '...')}}...</small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="{{url('app/kreiraj/putovanje')}}">Kreiraj</a></li>
                                    <li><a href="{{url('app/edit/putovanje/'.$putovanje->id)}}">Edit</a></li>
                                    <li><a href="{{url('app/delete/putovanje/'.$putovanje->id)}}">Izbrisi</a></li>
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
            $('#header_slajder').multiSelect();
            $('#other_slajder').multiSelect();
            $('#last_slajder').multiSelect();
            $('#redosled').multiSelect({
                keepOrder: true,

                afterSelect: function(value, text){
                    var get_val = $("#multiple_value").val();
                    var hidden_val = (get_val != "") ? get_val+"," : get_val;
                    $("#multiple_value").val(hidden_val+""+value);
                },
                afterDeselect: function(value, text){
                    var get_val = $("#multiple_value").val();
                    var new_val = get_val.replace(value, "");
                    $("#multiple_value").val(new_val);
                }

            });
        </script>
    @endpush
@endsection