
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <script src="{{url('js/pace.js')}}"></script>
    <link rel="stylesheet" href="{{url('css/pace-theme-center-atom.css')}}">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Go2Travel</title>




    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    @stack('meta')

    @stack('social')

    @stack('stylesheets')
</head>
<body>
<div id="fh5co-wrapper">
    <div id="fh5co-page">
        @yield('content')





        <footer>
            <div id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2>Go 2 Travel</h2>
                        </div>
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <p class="fh5co-social-icons">
                                POSLOVNI PODACI
                                <br>
                                Poslovno ime: Max Travel d.o.o.
                                <br>
                                PIB: 104633429
                                <br>
                                Matični broj: 20203773
                                <br>
                                Licenca br: OTP 065/2010

                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

@stack('scripts')
</body>
</html>

