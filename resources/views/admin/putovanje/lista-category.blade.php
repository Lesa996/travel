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
                Lista Kategorija

            </h2>

        </div>
        <!-- Multi Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Aktivne Kategorije
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/category/active')}}" method="POST" >
                            {!! csrf_field() !!}
                            <select id="header_slajder" class="ms" multiple="multiple" name="category[]">
                                @foreach($category as $putovanje)
                                    @if($putovanje->active)
                                        <option value="{{$putovanje->id}}" selected>{{$putovanje->name}}</option>
                                    @else
                                        <option value="{{$putovanje->id}}" >{{$putovanje->name}}</option>
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Kreiraj Kategoriju
                        </h2>

                    </div>
                    <div class="body">
                        <form action="{{url('app/store/category')}}" method="POST">
                            <div class="row clearfix">

                                    {!! csrf_field() !!}
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="name" placeholder="Naziv Kategorije">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                        <button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Save</button>
                                    </div>

                            </div>
                        </form>
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