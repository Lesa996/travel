<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="{{url('admin/favicon.ico')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{url('admin/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{url('admin/plugins/node-waves/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{url('admin/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{url('admin/css/style.css')}}" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="javascript:void(0);">Admin<b>Go2Travel</b></a>
    </div>
    <div class="card">
        <div class="body">
            {!! Form::open(['url' => 'login']) !!}
            <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        {!! Form::controlBootstrap('text', 6, 'log', $errors, trans('front/login.log')) !!}

                        {{--<input type="text" class="form-control" name="username" placeholder="Username" required autofocus>--}}
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        {!! Form::controlBootstrap('password', 6, 'password', $errors, trans('front/login.password')) !!}

                        {{--<input type="password" class="form-control" name="password" placeholder="Password" required>--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                        <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                        <label for="rememberme">Remember Me</label>
                    </div>
                    <div class="col-xs-4">
                        {!! Form::submitBootstrap(trans('front/form.send'), 'col-lg-12') !!}

                    </div>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{url('admin/plugins/node-waves/waves.js')}}"></script>

<!-- Validation Plugin Js -->
<script src="{{url('admin/plugins/jquery-validation/jquery.validate.js')}}"></script>

<!-- Custom Js -->
<script src="{{url('admin/js/admin.js')}}"></script>
<script src="{{url('admin/js/pages/examples/sign-in.js')}}"></script>
</body>

</html>


