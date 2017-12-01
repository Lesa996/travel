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

    <!-- Multi Select Css -->
    <link href="{{url('admin/plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">

    <!-- Morris Chart Css-->
    <link href="{{url('admin/plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{url('admin/css/themes/all-themes.css')}}" rel="stylesheet" />
    {!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/default.css') !!}
    @endpush
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Create Blog</h2>
                </div>
                <div class="body">
                    {!! Form::open(['url' => 'izlet', 'method' => 'post', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group checkbox pull-right">
                        <label>
                            {!! Form::checkbox('active') !!}
                            {{ trans('back/blog.published') }}
                        </label>
                    </div>

                    {!! Form::controlBootstrap('text', 0, 'title', $errors, trans('back/blog.title')) !!}

                    <div class="form-group {!! $errors->has('slug') ? 'has-error' : '' !!}">
                        {!! Form::label('slug', trans('back/blog.permalink'), ['class' => 'control-label']) !!}
                        {!! url('/') . '/blog/' . Form::text('slug', null, ['id' => 'permalink']) !!}
                        <small class="text-danger">{!! $errors->first('slug') !!}</small>
                    </div>

                    {!! Form::controlBootstrap('textarea', 0, 'summary', $errors, trans('back/blog.summary')) !!}
                    {!! Form::controlBootstrap('textarea', 0, 'content', $errors, trans('back/blog.content')) !!}
                    <div class="form-group">
                        <label>Putovanja</label>
                        <select id="putovanja" class="ms" multiple="multiple" name="putovanja[]">
                            @foreach($putovanja as $putovanje)
                                <option value="{{$putovanje->id}}" >{{$putovanje->naziv}}</option>
                            @endforeach
                        </select>
                    </div>


                    {!! Form::submitBootstrap(trans('front/form.send')) !!}

                    {!! Form::close() !!}
                    <div>
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
            {!! HTML::script('ckeditor/ckeditor.js') !!}
            <!-- Multi Select Plugin Js -->
            <script src="{{url('admin/plugins/multi-select/js/jquery.multi-select.js')}}"></script>
            <script>
                $('#putovanja').multiSelect();
                var config = {
                    codeSnippet_theme: 'Monokai',
                    language: '{{ config('app.locale') }}',
                    height: 100,
                    filebrowserBrowseUrl: '/elfinder/ckeditor',
                    toolbarGroups: [
                        {name: 'clipboard', groups: ['clipboard', 'undo']},
                        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
                        {name: 'links'},
                        {name: 'insert'},
                        {name: 'forms'},
                        {name: 'tools'},
                        {name: 'document', groups: ['mode', 'document', 'doctools']},
                        {name: 'others'},
                        //'/',
                        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
                        {name: 'styles'},
                        {name: 'colors'}
                    ]
                };

                CKEDITOR.replace('summary', config);

                config['height'] = 400;

                CKEDITOR.replace('content', config);

                function removeAccents(str) {
                    var accent = [
                        /[\300-\306]/g, /[\340-\346]/g, // A, a
                        /[\310-\313]/g, /[\350-\353]/g, // E, e
                        /[\314-\317]/g, /[\354-\357]/g, // I, i
                        /[\322-\330]/g, /[\362-\370]/g, // O, o
                        /[\331-\334]/g, /[\371-\374]/g, // U, u
                        /[\321]/g, /[\361]/g, // N, n
                        /[\307]/g, /[\347]/g // C, c
                    ];
                    var noaccent = ['A', 'a', 'E', 'e', 'I', 'i', 'O', 'o', 'U', 'u', 'N', 'n', 'C', 'c'];
                    for (var i = 0; i < accent.length; ++i) {
                        str = str.replace(accent[i], noaccent[i]);
                    }
                    return str;
                }

                $("#title").keyup(function () {
                    var str = removeAccents($(this).val())
                        .replace(/[^a-zA-Z0-9\s]/g, "")
                        .toLowerCase()
                        .replace(/\s/g, '-');
                    $("#permalink").val(str);
                });

            </script>
    @endpush
@endsection
