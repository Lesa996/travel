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

    <!-- Sweet Alert Css -->
    <link href="{{url('admin/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet" />

    <!-- Waves Effect Css -->
    <link href="{{url('admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{url('admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />

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
        <!-- Advanced Form Example With Validation -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Nastavi Sa Kreiranjem Putovanja</h2>
                    </div>
                    <div class="body">
                        <form action="{{url('app/store/smestaj/dva')}}" id="wizard_with_validation" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <h3>Plan Puta</h3>
                            <fieldset>

                                @foreach($putovanje->plan as $plan)
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea cols="30" rows="3" class="form-control no-resize"  name="dan[]" required></textarea>
                                            <label class="form-label">Dan {{$plan->dan}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </fieldset>


                            <h3>Cenovnik</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" name="datum_od" placeholder="Datum od">

                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" name="datum_do" placeholder="Datum do">

                                    </div>
                                </div>
                                <input type="text" name="putovanje" id="" value="{{$putovanje->id}}" hidden>
                                @foreach($putovanje->cenovnik as $cenovnik)
                                    <b>{{$cenovnik->smestaj->naziv . '  '.$cenovnik->tip}}</b>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="cenovnikCena{{$cenovnik->smestaj->naziv}}[]" >
                                            <label class="form-label">Cena</label>
                                        </div>
                                    </div>


                                @endforeach
                            </fieldset>



                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Advanced Form Example With Validation -->
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


    <!-- Input Mask Plugin Js -->
    <script src="{{url('admin/plugins/jquery-inputmask/jquery.inputmask.bundle.js')}}"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="{{url('admin/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <!--Form js -->
    <script src="{{url('admin/plugins/jquery-validation/jquery.validate.js')}}"></script>
    <script src="{{url('admin/plugins/jquery-steps/jquery.steps.js')}}"></script>


    <!-- Sweet Alert Plugin Js -->
    <script src="{{url('admin/plugins/sweetalert/sweetalert.min.js')}}"></script>

    <!-- GMap Js -->
    <script src="https://maps.google.com/maps/api/js?v=3&key=AIzaSyDq_RSFC_BAiBNji07rK-XvpX3rOZkg4bc"></script>
    <script src="{{url('admin/plugins/gmaps/gmaps.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{url('admin/js/admin.js')}}"></script>
    <script src="{{url('admin/js/pages/forms/form-wizard.js')}}"></script>
    <script src="{{url('admin/js/pages/maps/google.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{url('admin/plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{url('admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{url('admin/js/demo.js')}}"></script>
    <script >
        $('.datepicker').bootstrapMaterialDatePicker({
            format: 'dddd DD MMMM YYYY',
            clearButton: true,
            weekStart: 1,
            time: false
        });
        var $demoMaskedInput = $('.form-group');

        //Date
        $demoMaskedInput.find('.date').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });
    </script>
    @endpush
@endsection