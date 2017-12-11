@extends('layouts.app')
@section('content')
    @push('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Go2Travel is a travel agency" />
    <meta name="keywords" content="go2, travel, go2travel, trip, adventure, hotels, flights, travelocity, vacation, travel agency" />
    <meta name="author" content="Go2Travel" />
    @endpush
    @push('social')
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    @endpush
    @push('stylesheets')
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat%3A300%2C400%2C500%2C600%2C700%2C700italic%7CPlayfair+Display%3A300%2C400%2C500%2C600%2C700%2C700italic&subset=latin-ext&ver=1.0.0">
    <link href="https://fonts.googleapis.com/css?family=Montez" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{url('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{url('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{url('css/superfish.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{url('css/style.css')}}">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Modernizr JS -->
    <script src="{{url('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{url('js/respond.min.js')}}"></script>
    <![endif]-->
    <style>
        .fh5co-cover,
        .fh5co-hero {
            height: 600px;
        }
        .fh5co-cover .display-t {
            height: 600px;
        }
        .nav-tabs > li, .nav-pills > li {
            float:none;
            display:inline-block;
            *display:inline; /* ie7 fix */
            zoom:1; /* hasLayout ie7 trigger */
        }

        .nav-tabs, .nav-pills {
            text-align:center;
        }
        .nav-tabs > li > a{
            color: #848484;
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus{
            color: #fed700;
        }
        .cena{
            color: #fed700;
            font-family: Playfair Display;
            font-weight: 400;
            margin: unset;
        }
        .precrtana-cena , .aktuelna-cena{
            float: left;
        }
        .precrtana-cena{
            text-decoration: line-through;
            text-decoration-color: #fed700;
        }
        .putovanje-naziv{
            margin: 0 0 20px 0;

            font-family: Montserrat,sans-serif;
            font-weight: 800;
        }
        .text > p {
            font-family: Montserrat,sans-serif;
            margin: unset;
        }
        .opis-naziv{

            font-family: Montserrat,sans-serif;
            line-height: 1.25em;
            font-size: 17px;
            color: rgba(48, 48, 48, 0.81);
            font-weight: 700;
        }
        .opis-text{
            font-family: Montserrat,sans-serif;
            font-weight: 300;
            font-size: 15px;
            line-height: 25px;
        }
        .opis-text > div > i {

            color: #fed700;
        }
        .fa, .fa-star{
            color:rgba(0,0,0,0.2);
        }
        .checked {
            color: orange;
        }
        .text-center{
            text-align: center;
        }
        .bullet{
            display: table-cell;
            height: 50px;
            width: 50px;
            line-height: 50px;
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            background-color: #ff681a;
            border-radius: 50%;
            text-align: center;
        }
        .linija-ikonice{
            height: 100%;
            position: absolute;
            z-index: -1;
            width: 50px;
        }
        .linija{
            position: absolute;
            top: 0;
            left: 50%;
            display: block;
            width: 0;
            height: 100%;
            border-right: 1px dashed #e1e1e1;
            z-index: 8;
            content: '';
            -webkit-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        .dan-puta{

            margin-top: 10px;
        }
        @media (max-width: 480px) {

            .fh5co-cover .display-t {
                height: 400px;
            }

            .nav-tabs > li {
                float:none;
                border:1px solid #dddddd;
            }
            .nav-tabs > li.active > a{
                border:none;

            }
            .nav > li > a:hover, .nav > li > a:focus,
            .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus
            {
                background:none;
                border:none;
            }
        }
        @media(min-width: 481px){
            .nav-tabs > li {
                width: auto;
            }
        }
        .hover_img a { position:relative; }
        .hover_img a span { position:absolute; display:none; z-index:99; }
        .hover_img a:hover span { display:block; }
        .logo-heder{
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 7%;
            float: left;
        }
        #fh5co-menu-wrap{
            margin: auto;
        }
        #header-title{

        }
    </style>
    <style>
        .logo-heder{
            margin: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            width: 5%;
            float: left;
        }

        #header-title{

        }
        .sticky-wrapper{
            position: fixed !important;
        }
        .space{
            margin-top: 2%;
        }
        .travel-blog-text{
            background-color: rgba(0, 0, 0, 0.47);
        }
        .countdown{
            text-align: center;
            width: 100%;
            font: unset;
        }
    </style>
    @endpush
    @include('heder')

    <div class="fh5co-hero" data-section="home">
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/pexels-photo-227417.jpeg);">

            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box">

                                <h2>Kontakt</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="left"><h1 id="kontaktNaslov">
                        MaxTravel</h1>
                    <div id="kontaktTekst">
                        <strong>BEOGRAD</strong><br>
                        <a href="https://www.google.rs/maps/place/Strahinjića+Bana+36,+Beograd/@44.8225805,20.4592155,20z/data=!4m13!1m7!3m6!1s0x475a654acf650e27:0x7a835bc7e8b3617a!2sStrahinjića+Bana+36,+Beograd!3b1!8m2!3d44.8225805!4d20.4594891!3m4!1s0x475a654acf650e27:0x7a835bc7e8b3617a!8m2!3d44.8225805!4d20.4594891" target="_blank">Strahinjića Bana 36</a><br>
                        +381 11 334 2444<br>
                        office@maxtravel.rs<br>

                        <span style="font-size:10px;"><strong>ZIMSKO RADNO VREME PRODAJE:&nbsp;</strong></span><br>
                        Radnim danom 11-19h<br>
                        Subotom 09-15h<br>
                        <br>
                        <strong>NOVI SAD</strong><br>
                        <a href="https://wego.here.com/directions/mix//Go2-Travelling-Novi-Sad,-Kralja-Aleksandra-12,-Pariski-Mgazin-I-sprat,-21000-Novi-Sad,-Serbia:e-eyJuYW1lIjoiR28yIFRyYXZlbGxpbmcgTm92aSBTYWQiLCJhZGRyZXNzIjoiS3JhbGphIEFsZWtzYW5kcmEgMTIsIFBhcmlza2kgTWdhemluIEkgc3ByYXQsIDIxMDAwIE5vdmkgU2FkLCBTZXJiaWEiLCJsYXRpdHVkZSI6NDUuMjUzODEwNjE5MDI4LCJsb25naXR1ZGUiOjE5Ljg0Mzc2NTQ5NzIwOCwicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjo2MDI0NTk1MzY0NTc3MzJ9?map=45.25381,19.84377,18,normal&amp;fb_locale=en_GB" target="_blank">Kralja Aleksandra 12, Pariski Magazin-lokal 14</a><br>
                        +381 21&nbsp;523 525<br>
                        go2travelling021@gmail.com<br>

                        <strong style="font-size: 10px;">RADNO VREME:&nbsp;</strong><br>
                        Radnim danom 10-20h<br>
                        Subotom 10-14h<br>
                        <br>
                        <strong>NIŠ</strong><br>
                        <a href="https://wego.here.com/directions/mix//Go2-Travelling-Niš,-Obrenovićeva-bb,-TC-KALČA,-lamela-D,-3.sprat,-Niš:e-eyJuYW1lIjoiR28yIFRyYXZlbGxpbmcgTmlcdTAxNjEiLCJhZGRyZXNzIjoiT2JyZW5vdmlcdTAxMDdldmEgYmIsIFRDIEtBTFx1MDEwY0EsIGxhbWVsYSBELCAzLnNwcmF0LCBOaVx1MDE2MSIsImxhdGl0dWRlIjo0My4zMTgxMDYwMTA0NzEsImxvbmdpdHVkZSI6MjEuODk0MDc4MjU0NywicHJvdmlkZXJOYW1lIjoiZmFjZWJvb2siLCJwcm92aWRlcklkIjoyNTA5NDAwMTUwNTcyNDF9?map=43.31811,21.89408,18,normal&amp;fb_locale=en_GB" target="_blank">TPC Kalča, lamela D, 3. sprat</a><br>
                        <div>
                            +381&nbsp;18 257 991</div>
                        <div>
                            +381&nbsp;18 257 992</div>
                        go2travelling018@gmail.com<br>

                        <strong style="font-size: 10px;">RADNO VREME:&nbsp;</strong><br>
                        Radnim danom 11-19h<br>
                        Subotom 11-14h<br>

                        <strong>KRAGUJEVAC</strong><br>
                        <a href="https://wego.here.com/?map=44.01869,20.89803,16,normal&amp;fb_locale=en_GB" target="_blank">Kralja Aleksandra I Karađorđevića&nbsp;108</a><br>
                        +381 34 201 573<br>
                        +381 62 143 2942<br>
                        go2travelling.kg.034@gmail.com<br>

                        <strong style="font-size: 10px;">RADNO VREME:&nbsp;</strong><br>
                        Radnim danom 11-18h<br>
                        Subotom 11-15h<br>
                        <br>
                        <div>
                            <strong>ZAJEČAR&nbsp;</strong><br>
                            <span style="font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap;">Via Travel</span><br>
                            <a href="https://www.google.rs/maps/place/Hotel+Srbija+TIS/@43.9034378,22.2771348,19z/data=!4m5!3m4!1s0x4754735d7e0c30cb:0xa483dd8f13267248!8m2!3d43.903434!4d22.277682?hl=en" target="_blank"><span style="font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap;">Nikole Pašića bb</span></a><br>
                            <span style="font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap;">+381 19 420 587</span></div>

                        <strong>SKOPLJE MAKEDONIJA&nbsp;</strong><br>
                        <font face="arial, sans, sans-serif"><span style="font-size: 13px; white-space: pre-wrap;">Ok Travel</span></font><br>
                        <a href="https://www.google.rs/maps/place/OK+Travel/@41.9844224,21.4493607,16z/data=!4m8!1m2!2m1!1sTravel+Agency!3m4!1s0x135415ea46a91a1d:0x332e11f7372ae8d8!8m2!3d41.9841179!4d21.4533323?hl=en" target="_blank"><font face="arial, sans, sans-serif"><span style="font-size: 13px; white-space: pre-wrap;">Pandil Shishkov 4, lok. 7 naselba aerodrom</span></font></a><br>
                        <span style="font-family: arial, sans, sans-serif; font-size: 13px; white-space: pre-wrap;">+389 2 2477 301</span><br>

                        Licenca kategorije OTP br. 65 / 2010 od 02.02.2010.</div></div>
            </div>
            <div class="col-sm-6">
                <img src="mapa-za-sajt-nova.png" alt="">
            </div>
        </div>
    </div>
    <div class="">

        <div class="tab-content clearfix">
            <br>
            <div class="row">
                <div class="box">
                    <div class="col-sm-10 col-sm-offset-1">
                        <hr>
                        <h2 class="intro-text text-center">{{ trans('front/contact.title') }}</h2>
                        <hr>
                        <p>{{ trans('front/contact.text') }}</p>
                        {!! Form::open(['url' => 'contact']) !!}
                        <div class="row">
                            {!! Form::controlBootstrap('text', 6, 'name', $errors, trans('front/contact.name')) !!}
                            {!! Form::controlBootstrap('email', 6, 'email', $errors, trans('front/contact.email')) !!}
                            {!! Form::controlBootstrap('textarea', 12, 'message', $errors, trans('front/contact.message')) !!}

                            {!! Form::submitBootstrap(trans('front/form.send'), 'col-lg-12') !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
    <!-- Google Map -->
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script> --}}
    <!-- jQuery -->
    {{--<script src="dist/scripts.js"></script>--}}
    <script src="{{url('js/jquery.min.js')}}"></script>
    <script src="{{url('js/bootstrap.min.js')}}"></script>
    <script src="{{url('js/jquery.stellar.min.js')}}"></script>
    <script src="{{url('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{url('js/sticky.js')}}"></script>


    <script >
        function initMap() {
            var uluru = {lat: 39.2853, lng: 20.4005};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }

        var contentWayPoint = function() {
            var i = 0;
            $('.animate-box').waypoint( function( direction ) {

                if( direction === 'down' && !$(this.element).hasClass('animated') ) {

                    i++;

                    $(this.element).addClass('item-animate');
                    setTimeout(function(){

                        $('body .animate-box.item-animate').each(function(k){
                            var el = $(this);
                            setTimeout( function () {
                                el.addClass('fadeInUp animated');
                                el.removeClass('item-animate');
                            },  k * 50, 'easeInOutExpo' );
                        });

                    }, 100);

                }

            } , { offset: '85%' } );
        };

        var $stickyElement = $('.sticky-banner');
        var sticky;
        if ($stickyElement.length) {
            sticky = new Waypoint.Sticky({
                element: $stickyElement[0],
                wrapper:false,
            });
        }


    </script>
    <script>
        //            var projectWrapperPosition = $('.fh5co-hero').position().top;
        $(window).scroll(function() {
            console.log($(window).scrollTop())
            if($(window).scrollTop() < 20){
                $('#fh5co-header-section').addClass('space');
            }else{
                $('#fh5co-header-section').removeClass('space');
            }
//                if($(window).scrollTop() > (projectWrapperPosition - 150))
//                $('#fh5co-header-section').toggleClass('space');
//                else
//                $('#fh5co-header-section').removeClass('space');

        });

        contentWayPoint();
        // Offcanvas and cloning of the main menu
        var offcanvas = function() {

            var $clone = $('#fh5co-menu-wrap').clone();
            $clone.attr({
                'id' : 'offcanvas-menu'
            });
            $clone.find('> ul').attr({
                'class' : '',
                'id' : ''
            });

            $('#fh5co-page').prepend($clone);

            // click the burger
            $('.js-fh5co-nav-toggle').on('click', function(){

                if ( $('body').hasClass('fh5co-offcanvas') ) {
                    $('body').removeClass('fh5co-offcanvas');
                } else {
                    $('body').addClass('fh5co-offcanvas');
                }
                // event.preventDefault();

            });

            $('#offcanvas-menu').css('height', $(window).height());

            $(window).resize(function(){
                var w = $(window);


                $('#offcanvas-menu').css('height', w.height());

                if ( w.width() > 769 ) {
                    if ( $('body').hasClass('fh5co-offcanvas') ) {
                        $('body').removeClass('fh5co-offcanvas');
                    }
                }

            });

        }
        offcanvas();
    </script>
    @endpush
@endsection