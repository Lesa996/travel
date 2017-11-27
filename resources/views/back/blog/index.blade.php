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
    <style>
        .table tbody tr.warning td, .table tbody tr.warning th{
            background-color: #FFC107;
        }

    </style>
    @endpush

    <div class="row col-lg-12">
    <div class="pull-right link">{!! $links !!}</div>
  </div>


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Posts <a href="{{url('articles/create')}}" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                            <i class="material-icons">add</i>
                        </a>
                    </h2>

                </div>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ trans('back/blog.title') }}
                                <a href="#" name="posts.title" class="order">
                                    <span class="fa fa-fw fa-{{ $order->name == 'posts.title' ? $order->sens : 'unsorted'}}"></span>
                                </a>
                            </th>
                            <th>
                                {{ trans('back/blog.date') }}
                                <a href="#" name="posts.created_at" class="order">
                                    <span class="fa fa-fw fa-{{ $order->name == 'posts.created_at' ? $order->sens : 'unsorted'}}"></span>
                                </a>
                            </th>
                            <th>
                                {{ trans('back/blog.published') }}
                                <a href="#" name="posts.active" class="order">
                                    <span class="fa fa-fw fa-{{ $order->name == 'posts.active' ? $order->sens : 'unsorted'}}"></span>
                                </a>
                            </th>
                            @if(session('statut') == 'admin')
                                <th>
                                    {{ trans('back/blog.author') }}
                                    <a href="#" name="username" class="order">
                                        <span class="fa fa-fw fa-{{ $order->name == 'username' ? $order->sens : 'unsorted'}}"></span>
                                    </a>
                                </th>
                                <th>
                                    {{ trans('back/blog.seen') }}
                                    <a href="#" name="posts.seen" class="order">
                                        <span class="fa fa-fw fa-{{ $order->name == 'posts.seen' ? $order->sens : 'unsorted'}}"></span>
                                    </a>
                                </th>
                            @endif
                            <th></th>
                            <th></th>
                            <th></th>

                        </tr>
                        </thead>
                        <tbody>
                        @include('back.blog.table')

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
  <div class="row col-lg-12">
    <div class="pull-right link">{!! $links !!}</div>
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


    <!-- Custom Js -->
    <script src="{{url('admin/js/admin.js')}}"></script>
    <script src="{{url('admin/js/pages/forms/form-wizard.js')}}"></script>

    <!-- Demo Js -->
    <script src="{{url('admin/js/demo.js')}}"></script>
  <script>

    $(function() {

        // Seen gestion
        $(document).on('change', ':checkbox[name="seen"]', function() {
            $(this).parents('tr').toggleClass('warning');
            $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
            $.ajax({
                url: '{{ url('postseen') }}' + '/' + this.value,
                type: 'PUT',
                data: "seen=" + this.checked
            })
            .done(function() {
                $('.fa-spin').remove();
                $('input:checkbox[name="seen"]:hidden').show();
            })
            .fail(function() {
                $('.fa-spin').remove();
                chk = $('input:checkbox[name="seen"]:hidden');
                chk.show().prop('checked', chk.is(':checked') ? null:'checked').parents('tr').toggleClass('warning');
                alert('{{ trans('back/blog.fail') }}');
            });
        });

        // Active gestion
        $(document).on('change', ':checkbox[name="active"]', function() {
            $(this).hide().parent().append('<i class="fa fa-refresh fa-spin"></i>');
            $.ajax({
                url: '{{ url('postactive') }}' + '/' + this.value,
                type: 'PUT',
                data: "active=" + this.checked
            })
            .done(function() {
                $('.fa-spin').remove();
                $('input:checkbox[name="active"]:hidden').show();
            })
            .fail(function() {
                $('.fa-spin').remove();
                chk = $('input:checkbox[name="active"]:hidden');
                chk.show().prop('checked', chk.is(':checked') ? null:'checked').parents('tr').toggleClass('warning');
                alert('{{ trans('back/blog.fail') }}');
            });
        });

        // Sorting gestion
        $('a.order').click(function(e) {
            e.preventDefault();
            // Sorting direction
            var sens;
            if($('span', this).hasClass('fa-unsorted')) sens = 'aucun';
            else if ($('span', this).hasClass('fa-sort-desc')) sens = 'desc';
            else if ($('span', this).hasClass('fa-sort-asc')) sens = 'asc';
            // Set to zero
            $('a.order span').removeClass().addClass('fa fa-fw fa-unsorted');
            // Adjust selected
            $('span', this).removeClass();
            var tri;
            if(sens == 'aucun' || sens == 'asc') {
                $('span', this).addClass('fa fa-fw fa-sort-desc');
                tri = 'desc';
            } else if(sens == 'desc') {
                $('span', this).addClass('fa fa-fw fa-sort-asc');
                tri = 'asc';
            }
            var name = $(this).attr('name');
            // Wait icon
            $('.breadcrumb li').append('<span id="tempo" class="fa fa-refresh fa-spin"></span>');
            // Send ajax
            $.get('{{ url('blog/order') }}', { name: name, sens: tri })
            .done(function(data) {
                $('tbody').html(data.view);
                $('.link').html(data.links.replace('posts.(.+)&sens', name));
                $('#tempo').remove();
            })
            .fail(function() {
                $('#tempo').remove();
                alert('{{ trans('back/blog.fail') }}');
            });
        })

    });

  </script>

@endpush
    @endsection
