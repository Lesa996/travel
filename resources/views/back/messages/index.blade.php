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
    <style type="text/css">
        .table { margin-bottom: 0; }
        .panel-heading { padding: 0 15px; }
    </style>
    @endpush

    <div class="container-fluid">
        @foreach ($messages as $message)
            <div class="panel {!! $message->seen? 'panel-default' : 'panel-warning' !!}">
                <div class="panel-heading">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="col-lg-1">{{ trans('back/messages.name') }}</th>
                            <th class="col-lg-1">{{ trans('back/messages.email') }}</th>
                            <th class="col-lg-1">{{ trans('back/messages.date') }}</th>
                            <th class="col-lg-1">{{ trans('back/messages.seen') }}</th>
                            <th class="col-lg-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-primary"><strong>{{ $message->name }}</strong></td>
                            <td>{!! HTML::mailto($message->email, $message->email) !!}</td>
                            <td>{{ $message->created_at }}</td>
                            <td>{!! Form::checkbox('seen', $message->id, $message->seen) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['contact.destroy', $message->id]]) !!}
                                {!! Form::destroyBootstrap(trans('back/messages.destroy'), trans('back/messages.destroy-warning'), 'btn-xs') !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-body">
                    {{ $message->message }}
                </div>
            </div>
        @endforeach
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
    </script>
    <script>

        $(function () {
            $(':checkbox').change(function () {
                $(this).parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
                $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
                $.ajax({
                    url: 'contact/' + this.value,
                    type: 'PUT',
                    data: 'seen=' + this.checked
                })
                    .done(function () {
                        $('.fa-spin').remove();
                        $('input[type="checkbox"]:hidden').show();
                    })
                    .fail(function () {
                        $('.fa-spin').remove();
                        var chk = $('input[type="checkbox"]:hidden');
                        chk.parents('.panel').toggleClass('panel-warning').toggleClass('panel-default');
                        chk.show().prop('checked', chk.is(':checked') ? null : 'checked');
                        alert('{{ trans('back/messages.fail') }}');
                    });
            });
        });

    </script>
    @endpush
@endsection


