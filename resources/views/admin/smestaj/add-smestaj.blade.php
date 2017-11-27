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
                        <h2>Kreiraj Smestaj</h2>
                    </div>
                    <div class="body">
                        <form action="{{url('app/store/smestaj')}}" id="wizard_with_validation" method="POST" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <h3>Lokacija</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="drzava" class="form-control" required>
                                        <label class="form-label">Drzava*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" name="grad" class="form-control" required>
                                        <label class="form-label">Grad*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="lat" class="form-control" required>
                                        <label class="form-label">Lat*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" name="lng" class="form-control" required>
                                        <label class="form-label">Lng*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <div id="gmap_basic_example" class="gmap"></div>
                                    </div>
                                </div>

                            </fieldset>


                            <h3>Informacije O Smestaju</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="naziv" required>
                                        <label class="form-label">Naziv*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tip_objekta"  required>
                                        <label class="form-label">Tip Objekta*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="broj_zvezdica" required>
                                        <label class="form-label">Broj Zvezdica*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="vrsta_soba" >
                                        <label class="form-label">Vrsta Sobe*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tip_soba" >
                                        <label class="form-label">Tip Soba*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="broj_ljudi" >
                                        <label class="form-label">Broj ljudi*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="struktura_sobe" >
                                        <label class="form-label">Struktura Sobe*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="sadrzaj_sobe" >
                                        <label class="form-label">Sadrzaj Sobe*</label>
                                    </div>
                                </div>
                            </fieldset>

                            <h3>Opis Smestaja</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea cols="30" rows="3" class="form-control no-resize"  name="kratak_opis" required></textarea>
                                        <label class="form-label">Kratak Opis*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea cols="30" rows="3" class="form-control no-resize"  name="opis" required></textarea>
                                        <label class="form-label">Opis smestaja*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="adresa" required>
                                        <label class="form-label">Adresa*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="link" required>
                                        <label class="form-label">Link*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea cols="30" rows="3" class="form-control no-resize"  name="dodatni_sadrzaj" required></textarea>
                                        <label class="form-label">Dodatni sadrzaj*</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea cols="30" rows="3" class="form-control no-resize"  name="napomena_hotel" required></textarea>
                                        <label class="form-label">Napomena Hotela*</label>
                                    </div>
                                </div>
                            </fieldset>
                            <h3>Galerija</h3>
                            <fieldset>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" name="gallery[]" multiple class="form-control" required>
                                        <br>
                                        <label class="form-label">Gallery*</label>
                                    </div>
                                </div>
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

    <!-- Demo Js -->
    <script src="{{url('admin/js/demo.js')}}"></script>
    @endpush
@endsection