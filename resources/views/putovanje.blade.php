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
        .card {
            background: #fff;
            min-height: 50px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            margin-bottom: 30px; }
        .card .card-inside-title {
            margin-top: 25px;
            margin-bottom: 15px;
            display: block;
            font-size: 15px;
            color: #000; }
        .card .card-inside-title small {
            color: #999;
            display: block;
            font-size: 11px;
            margin-top: 5px; }
        .card .card-inside-title small a {
            color: #777;
            font-weight: bold; }
        .card .card-inside-title:first-child {
            margin-top: 0; }
        .card .bg-red,
        .card .bg-pink,
        .card .bg-purple,
        .card .bg-deep-purple,
        .card .bg-indigo,
        .card .bg-blue,
        .card .bg-light-blue,
        .card .bg-cyan,
        .card .bg-teal,
        .card .bg-green,
        .card .bg-light-green,
        .card .bg-lime,
        .card .bg-yellow,
        .card .bg-amber,
        .card .bg-orange,
        .card .bg-deep-orange,
        .card .bg-brown,
        .card .bg-grey,
        .card .bg-blue-grey,
        .card .bg-black {
            border-bottom: none !important;
            color: #fff !important; }
        .card .bg-red h2, .card .bg-red small, .card .bg-red .material-icons,
        .card .bg-pink h2,
        .card .bg-pink small,
        .card .bg-pink .material-icons,
        .card .bg-purple h2,
        .card .bg-purple small,
        .card .bg-purple .material-icons,
        .card .bg-deep-purple h2,
        .card .bg-deep-purple small,
        .card .bg-deep-purple .material-icons,
        .card .bg-indigo h2,
        .card .bg-indigo small,
        .card .bg-indigo .material-icons,
        .card .bg-blue h2,
        .card .bg-blue small,
        .card .bg-blue .material-icons,
        .card .bg-light-blue h2,
        .card .bg-light-blue small,
        .card .bg-light-blue .material-icons,
        .card .bg-cyan h2,
        .card .bg-cyan small,
        .card .bg-cyan .material-icons,
        .card .bg-teal h2,
        .card .bg-teal small,
        .card .bg-teal .material-icons,
        .card .bg-green h2,
        .card .bg-green small,
        .card .bg-green .material-icons,
        .card .bg-light-green h2,
        .card .bg-light-green small,
        .card .bg-light-green .material-icons,
        .card .bg-lime h2,
        .card .bg-lime small,
        .card .bg-lime .material-icons,
        .card .bg-yellow h2,
        .card .bg-yellow small,
        .card .bg-yellow .material-icons,
        .card .bg-amber h2,
        .card .bg-amber small,
        .card .bg-amber .material-icons,
        .card .bg-orange h2,
        .card .bg-orange small,
        .card .bg-orange .material-icons,
        .card .bg-deep-orange h2,
        .card .bg-deep-orange small,
        .card .bg-deep-orange .material-icons,
        .card .bg-brown h2,
        .card .bg-brown small,
        .card .bg-brown .material-icons,
        .card .bg-grey h2,
        .card .bg-grey small,
        .card .bg-grey .material-icons,
        .card .bg-blue-grey h2,
        .card .bg-blue-grey small,
        .card .bg-blue-grey .material-icons,
        .card .bg-black h2,
        .card .bg-black small,
        .card .bg-black .material-icons {
            color: #fff !important; }
        .card .bg-red .badge,
        .card .bg-pink .badge,
        .card .bg-purple .badge,
        .card .bg-deep-purple .badge,
        .card .bg-indigo .badge,
        .card .bg-blue .badge,
        .card .bg-light-blue .badge,
        .card .bg-cyan .badge,
        .card .bg-teal .badge,
        .card .bg-green .badge,
        .card .bg-light-green .badge,
        .card .bg-lime .badge,
        .card .bg-yellow .badge,
        .card .bg-amber .badge,
        .card .bg-orange .badge,
        .card .bg-deep-orange .badge,
        .card .bg-brown .badge,
        .card .bg-grey .badge,
        .card .bg-blue-grey .badge,
        .card .bg-black .badge {
            background-color: #fff;
            color: #555; }
        .card .header {
            color: #555;
            padding: 20px;
            position: relative;
            border-bottom: 1px solid rgba(204, 204, 204, 0.35); }
        .card .header .header-dropdown {
            position: absolute;
            top: 20px;
            right: 15px;
            list-style: none; }
        .card .header .header-dropdown .dropdown-menu li {
            display: block !important; }
        .card .header .header-dropdown li {
            display: inline-block; }
        .card .header .header-dropdown i {
            font-size: 20px;
            color: #999;
            -moz-transition: all 0.5s;
            -o-transition: all 0.5s;
            -webkit-transition: all 0.5s;
            transition: all 0.5s; }
        .card .header .header-dropdown i:hover {
            color: #000; }
        .card .header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: normal;
            color: #111; }
        .card .header h2 small {
            display: block;
            font-size: 12px;
            margin-top: 5px;
            color: #999;
            line-height: 15px; }
        .card .header h2 small a {
            font-weight: bold;
            color: #777; }
        .card .header .col-xs-12 h2 {
            margin-top: 5px; }
        .card .body {
            font-size: 14px;
            color: #555;
            padding: 20px; }
        .card .body .col-xs-1,
        .card .body .col-sm-1,
        .card .body .col-md-1,
        .card .body .col-lg-1 {
            margin-bottom: 20px; }
        .card .body .col-xs-2,
        .card .body .col-sm-2,
        .card .body .col-md-2,
        .card .body .col-lg-2 {
            margin-bottom: 20px; }
        .card .body .col-xs-3,
        .card .body .col-sm-3,
        .card .body .col-md-3,
        .card .body .col-lg-3 {
            margin-bottom: 20px; }
        .card .body .col-xs-4,
        .card .body .col-sm-4,
        .card .body .col-md-4,
        .card .body .col-lg-4 {
            margin-bottom: 20px; }
        .card .body .col-xs-5,
        .card .body .col-sm-5,
        .card .body .col-md-5,
        .card .body .col-lg-5 {
            margin-bottom: 20px; }
        .card .body .col-xs-6,
        .card .body .col-sm-6,
        .card .body .col-md-6,
        .card .body .col-lg-6 {
            margin-bottom: 20px; }
        .card .body .col-xs-7,
        .card .body .col-sm-7,
        .card .body .col-md-7,
        .card .body .col-lg-7 {
            margin-bottom: 20px; }
        .card .body .col-xs-8,
        .card .body .col-sm-8,
        .card .body .col-md-8,
        .card .body .col-lg-8 {
            margin-bottom: 20px; }
        .card .body .col-xs-9,
        .card .body .col-sm-9,
        .card .body .col-md-9,
        .card .body .col-lg-9 {
            margin-bottom: 20px; }
        .card .body .col-xs-10,
        .card .body .col-sm-10,
        .card .body .col-md-10,
        .card .body .col-lg-10 {
            margin-bottom: 20px; }
        .card .body .col-xs-11,
        .card .body .col-sm-11,
        .card .body .col-md-11,
        .card .body .col-lg-11 {
            margin-bottom: 20px; }
        .card .body .col-xs-12,
        .card .body .col-sm-12,
        .card .body .col-md-12,
        .card .body .col-lg-12 {
            margin-bottom: 20px; }
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
    @endpush

    <header id="fh5co-header-section" class="sticky-banner">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 >
                    <img src="{{url('logo.png')}}" class="img-responsive logo-heder" alt="">
                </h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li {!! classActivePath('/') !!} ><a href="{{url('/')}}" >Pocetna</a></li>
                        <li {!! classActivePath('putovanje') !!} ><a href="{{url('putovanje')}}" >Putovanja</a></li>
                        <li {!! classActivePath('smestaj') !!} ><a href="{{url('smestaj')}}">Smestaj</a></li>
                        <li {!! classActivePath('blog') !!}><a href="{{url('blog')}}">Blog</a></li>
                        <li {!! classActivePath('o-nama') !!}><a href="{{url('o-nama')}}">O nama </a></li>
                        <li {!! classActivePath('kontakt') !!}><a href="{{url('kontakt')}}">Kontakt</a></li>
                        <li class="active"><a>Kontakt: +381 18 257 991 </a> </li>

                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="fh5co-hero" data-section="home">
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{'../'.$putovanje->cover->url}});">

            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box">

                                <h2>{{$putovanje->naziv}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="">
        <ul class="nav nav-tabs nav-bar-putovanja">
            <li class="active col-xs-12"><a href="#Cenovnik" data-toggle="tab" ><i class="glyphicon glyphicon-eur"></i> Cenovnik</a></li>
            <li class=" col-xs-12"><a href="#Informacije" data-toggle="tab"><i class="glyphicon glyphicon-list-alt"></i> Informacije</a></li>
            <li class="col-xs-12"><a href="#PlanPuta" data-toggle="tab"><i class="fa fa-map-o"></i> Plan puta</a></li>
            <li class="col-xs-12"><a href="#Smestaji" data-toggle="tab"><i class="fa fa-map-o"></i> Smestaj </a></li>
            <li class="col-xs-12"><a href="#Galerija" data-toggle="tab"><i class="fa fa-map-o"></i> Galerija </a></li>
            <li class="col-xs-12"><a href="#Izleti" data-toggle="tab"><i class="fa fa-tree"></i> Izleti</a></li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane " id="Informacije">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="putovanje-naziv">{{$putovanje->naziv}}</h1>
                            <div class="precrtana-cena">
                                <h3 class="cena">
                                    <i class="glyphicon glyphicon-eur"></i>
                                    {{$putovanje->precrtana_cena}}
                                </h3>
                            </div>
                            <div class="aktuelna-cena">
                                <h3 class="cena">
                                    /<i class="glyphicon glyphicon-eur"></i>
                                    {{$putovanje->cena_od}}
                                </h3>
                            </div>
                            <br>
                            <div class="text">
                                <br>
                                <p>{{$putovanje->opis->kratak_opis}}</p>
                            </div>
                            <br>
                            <div>
                                <i class="glyphicon glyphicon-time"></i>
                                {{$putovanje->broj_dana}}

                                <i class="fa fa-moon-o"></i>
                                {{$putovanje->broj_noci}}

                            </div>
                            <div>

                            </div>
                            <br>

                            <div class="">
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Destinacija</div>
                                    <div class="col-md-7 opis-text">
                                        {{$putovanje->grad . '/'. $putovanje->drzava}}
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Vrsta prevoza</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->vrsta_prevoza}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Obroci</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->obroci}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">O Destinaciji</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->opis->destinacija}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Napomena</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->opis->napomena}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Dodatna Napomena</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->opis->dodatna_napomena}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Rok Za Prijavu</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->opis->rok_prijava}}.</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Minimalan broj putnika</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->opis->min_putnika}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Organizator</div>
                                    <div class="col-md-7 opis-text">{{$putovanje->opis->organizator}}</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Licenca</div>
                                    <div class="col-md-7 opis-text">
                                        {{$putovanje->opis->licenca}}
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Garancija putovanja</div>
                                    <div class="col-md-7 opis-text">
                                        {{$putovanje->opis->garancija}}

                                    </div>
                                </div>

                            </div>
                            <br>
                            </div>
                        <div class="col-md-4">
                            @foreach($putovanje->blog as $post)
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        {{ $post->title }}
                                    </h2>

                                </div>
                                <div class="body">
                                    {!! $post->summary !!}
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-md-10">
                            <hr>

                        </div>
                    </div>

                </div>


            </div>
            <div class="tab-pane" id="Smestaji">
                <br>
                <div class="container">
                    <div class="row">
                        @foreach($putovanje->cenovnik()->groupBy('smestaj_id')->get() as  $item)
                            <div class="col-md-3  col-md-offset-1 col-sm-3 home-page-travel " style="background-image:url({{url($item->smestaj->cover->url)}}) ">
                                <div class="balcken"></div>

                                <div class="travel-blog-text">
                                    <div class="prod-title animate-box">
                                        <h3><a href="{{url('smestaj/'.$item->smestaj->drzava.'/'.$item->smestaj->grad.'/'.$item->smestaj->naziv)}}">{{$item->smestaj->naziv}}</a></h3>
                                        <p style="color: white">{{$item->smestaj->opis->kratak_opis}}</p>
                                        <p><a href="{{url('smestaj/'.$item->smestaj->drzava.'/'.$item->smestaj->grad.'/'.$item->smestaj->naziv)}}">Learn More...</a></p>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
                </div>
                <br>
            </div>
            <div class="tab-pane" id="Galerija">
                <br>
                <div class="container">
                    <div class="row ">
                            @foreach($putovanje->gallery as $slika)
                            <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                                <div class="box">
                                    <a href="#" data-toggle="modal" data-target="#2">
                                        <img src="{{url($slika->url)}}">
                                    </a>
                                    <div class="modal fade" id="2" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <div class="modal-body">
                                                    <img src="{{url($slika->url)}}">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                </div>
                <br>
            </div>
            <div class="tab-pane active" id="Cenovnik">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="putovanje-naziv">{{$putovanje->naziv}}</h1>
                            <div class="cenovnik">
                                <div class="heder-cenovnika row">
                                    <div class="col-xs-6 opis-naziv">
                                        Smestaj
                                    </div>
                                    <div class="col-xs-3 opis-naziv">
                                        Tip smestaja
                                    </div>
                                    <div class="col-xs-3 opis-naziv">
                                        {{date('d/m', strtotime($putovanje->cenovnik()->first()->datum_od))}} - {{date('d/m', strtotime($putovanje->cenovnik()->first()->datum_do))}}
                                    </div>
                                </div>
                                <hr>

                                @foreach($putovanje->cenovnik()->groupBy('smestaj_id')->get() as $cenaGroup)
                                    <div class="content-cenovnika row">
                                        <div class="col-xs-6 opis-text">
                                            <div class="hover_img">
                                                <i class="glyphicon glyphicon-info-sign"></i><a href="{{url('smestaj/'.$cenaGroup->smestaj->drzava.'/'.$cenaGroup->smestaj->grad.'/'.$cenaGroup->smestaj->naziv)}}">{{$cenaGroup->smestaj->naziv}}<span><img src="{{url($cenaGroup->smestaj->cover->url)}}" alt="image" height="100" /></span></a>
                                                <div class="rating">
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star "></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-3 opis-text">
                                            @foreach(explode(',',$cenaGroup->smestaj->tip_soba) as $soba)
                                                <div>{{$soba}}</div>
                                            @endforeach
                                        </div>
                                        <div class="col-xs-3 opis-text">
                                            @foreach(explode(',',$cenaGroup->smestaj->tip_soba) as $soba)
                                                <div class="text-center">{{\App\Cenovnik::where([['smestaj_id',$cenaGroup->smestaj_id],['tip','like','%' .$soba .'%' ],['putovanje_id',$cenaGroup->putovanje_id]])->first()->cena}} <i class="glyphicon glyphicon-eur"></i></div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                                <hr>

                                <div class="row">
                                    <hr>
                                    <div class="col-md-6 opis-naziv">Cena obuhvata</div>
                                    <div class="col-md-6 opis-text">
                                        <div>
                                            <i class="glyphicon glyphicon-ok"></i> Dorucak
                                        </div>
                                        <div>
                                            <i class="glyphicon glyphicon-ok"></i> Rucak

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-6 opis-naziv">Cena ne obuhvata</div>
                                    <div class="col-md-6 opis-text">
                                        <div>
                                            <i class="glyphicon glyphicon-remove"></i> Boravisna taksa
                                        </div>
                                        <div>
                                            <i class="glyphicon glyphicon-remove"></i> Izlete
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-md-10">
                            {{--<hr>--}}

                        </div>
                    </div>

                </div>

            </div>
            <div class="tab-pane" id="PlanPuta">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="putovanje-naziv">Letovanje Grcka</h1>
                            <br>
                            <div class="plan-puta">
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">1</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 1: Polazak</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">2</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 2: Lorem</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">3</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 3: Lorem</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">4</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 4: Lorem</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">5</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 5: Lorem</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">6</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 6: Lorem</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-xs-3 col-md-1">
                                        <div class="bullet">7</div>

                                    </div>
                                    <div class="col-xs-7 col-md-10 dan-puta">
                                        <div class="opis-naziv">Dan 7: Lorem</div>
                                        <br>
                                        <div class="opis-text ">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra purus vitae venenatis laoreet. Phasellus tincidunt rhoncus rutrum. Mauris a eleifend nisl. Cras ac bibendum massa.
                                            Donec ultricies, turpis a sagittis suscipit, ex odio volutpat sem, vel molestie varius est.
                                            Suspendisse ultrices nulla eu volutpat volutpat. Proin gravida nibh vel velit auctor aliqueenean.
                                            Nunc tincidunt mollis felis, sed bibendum ligula auctor et. Etiam a erat sit amet augue tincidunt euismod.
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="mapa">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="map" class="fh5co-map"></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-md-10">
                            {{--<hr>--}}

                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-pane" id="Izleti">
                <br>
                <div class="container">
                    <div class="row">
                        @foreach($putovanje->izlet as $post)
                        <div class="box">
                            <div class="col-lg-12">
                                <hr>
                                <h2 class="text-center">{{ $post->title }}
                                    <br>
                                    <small>{{ $post->user->username }} {{ trans('front/blog.on') }} {!! $post->created_at . ($post->created_at != $post->updated_at ? trans('front/blog.updated') . $post->updated_at : '') !!}</small>
                                </h2>
                                <hr>
                                {!! $post->summary !!}<br>
                                {!! $post->content !!}
                                <hr>

                            </div>
                        </div>
                        @endforeach
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
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq_RSFC_BAiBNji07rK-XvpX3rOZkg4bc&callback=initMap">
    </script>

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
                offset: 0
            })
        }
        contentWayPoint();
    </script>
    @endpush
@endsection