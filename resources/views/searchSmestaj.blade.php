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
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
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
        .search{
            margin-bottom: 10%;
            margin-top: 10%;

        }
        .search > div{
            margin-bottom: 10%;
        }
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
        #fh5co-started{
            padding: unset;
            padding-top: 7em;

        }
        #fh5co-started .form-control{
            /*color: #555555;*/
        }
        #fh5co-started .form-inline .form-group .form-control{
            padding: unset !important;
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
        #fh5co-menu-wrap{
            margin: auto;
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
    <div id="fh5co-started" data-stellar-background-ratio="0.5" style="background-image:url(images/pexels-photo-248771.jpeg)" >
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <h2>Pretrazite</h2>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-10 col-md-offset-2">
                    <form action="{{url('smestaj')}}" method="POST" class="form-inline">
                        {{csrf_field()}}
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">

                                <input type="name" name="drzava" class="form-control" id="name" placeholder="Drzava">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">

                                <input type="name" name="grad" class="form-control" id="name" placeholder="Grad">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <select name="objekat" class="form-control" >
                                    <option   value="" selected>Grad</option>
                                    <option value="Hotel">Hotel</option>
                                    <option value="Hostel">Hostel</option>
                                    <option value="Vila">Vila</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <select name="sobe" class="form-control" >
                                    <option   value="" selected>Sobe</option>
                                    <option value="1/1">1/1</option>
                                    <option value="1/2">1/2</option>
                                    <option value="1/3">1/3</option>
                                    <option value="1/4">1/4</option>
                                    <option value="1/5">1/5</option>
                                    <option value="1/6">1/6</option>
                                    <option value="1/7">1/7</option>
                                    <option value="1/8">1/8</option>
                                    <option value="1/9">1/9</option>
                                    <option value="1/10">1/10</option>
                                    <option value="1/11">1/11</option>
                                    <option value="1/12">1/12</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <div class="form-group">
                                <input type="text" name="dodatno" class="form-control" id="name" placeholder="Dodatni sadrzaj">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <button type="submit" class="btn btn-primary btn-block">Pretrazi</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>



    <div class="container">
                <div class="row search">
                    @foreach($smestaji as $key => $item)

                        <div class="col-md-3  col-md-offset-1 col-sm-3 home-page-travel " style="background-image:url('{{url($item->cover->url)}}') ">
                            <div class="balcken"></div>

                            <div class="travel-blog-text">
                                <div class="prod-title animate-box">
                                    <h3><a href="{{url('smestaj/'.$item->drzava.'/'.$item->grad.'/'.$item->naziv)}}">{{$item->naziv}}</a></h3>
                                    <p style="color: white">{{$item->opis->kratak_opis}}</p>
                                    <p><a href="{{url('smestaj/'.$item->drzava.'/'.$item->grad.'/'.$item->naziv)}}">Vidi vise...</a></p>
                                </div>
                            </div>

                        </div>
                        @if(($key % 2 == 0) && ($key != 0))
                            <br>
                        @endif
                    @endforeach

                </div>
            </div>



    @push('scripts')
    <!-- Google Map -->
    {{--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script> --}}
    <!-- jQuery -->
    {{--<script src="dist/scripts.js"></script>--}}
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>
    <script >

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

        $(window).stellar();
        var $stickyElement = $('.sticky-banner');
        var sticky;
        if ($stickyElement.length) {
            sticky = new Waypoint.Sticky({
                element: $stickyElement[0],
                wrapper:false

            })
        }

    </script>
    <script>
        //            var projectWrapperPosition = $('.fh5co-hero').position().top;
        $(window).scroll(function() {

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
    </script>
    @endpush
@endsection