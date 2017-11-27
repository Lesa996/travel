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
    </style>
    @endpush
    <header id="fh5co-header-section" class="sticky-banner">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 id="fh5co-logo"><a href="/">Go2Travel</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li {!! classActivePath('/') !!} ><a href="/" >Pocetna</a></li>
                        <li {!! classActivePath('putovanje') !!} ><a href="putovanje" >Putovanja</a></li>
                        <li {!! classActivePath('smestaj') !!} ><a href="smestaj">Smestaj</a></li>
                        <li {!! classActiveSegment(1, ['blog']) !!} {!! classActivePath('blog') !!}><a href="blog">Blog</a></li>
                        <li {!! classActivePath('o-nama') !!}><a href="o-nama">O nama </a></li>
                        <li {!! classActivePath('kontakt') !!}><a href="kontakt">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="fh5co-hero" data-section="home">
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/pexels-photo-227417.jpeg);">

            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box">

                                <h2>O nama</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="">

        <div class="tab-content clearfix">
            <br>
            <div class="container ">
                <div class="row about-1">
                    <div class="col-lg-9 col-md-9 col-sm-14 col-xs-14">
                        <h2>Mi nismo samo work and travel agencija</h2>
                        <span>Max Travel</span>
                        <p style="text-align: justify;" data-mce-style="text-align: justify;">Agencija Max Travel doo nastala je kao posebna članica grupacije Eurojet, 2007. godine. Od tada je i članica YUTA-e i sa ponosom i velikim uspehom zastupa nekoliko svojih brendova: Go2 Travelling koji je jedan od najpopularnijih turističkih brendova za mlade, Go2 Adventure koji se bavi avanturističkim putovanjima i dalekim i egzotičnim destinacijama, Go2 Serbia koja se bavi inkamingom i razvojem domaćeg turizma, Go2 America, brend koji se bavi Work and Travel programom u SAD. Velika posvećenost i stručnost naših zaposlenih dovodi i do sjajnih rezultata. Rezultati su lako merljivi, a to je zadovoljstvo naših putnika. Naš slogan je Explore. Dream. Discover, a uspomene stvaramo zajedno!</p>    </div>
                    <div class="col-lg-offset-1 col-lg-4 col-md-offset-1 col-md-4 col-sm-14 col-xs-14 about-spec">
                        34
                        <p>zaposlenih u kompaniji</p>    </div>
                </div>

                <div class="row">
                    <div class="about-box">
                        <a class="about-box-logo" href="http://www.go2travelling.net/" target="_blank" style="background-image: url('http://www.go2america.rs/images/page_items_parts/go2travelling.svg');"></a>
                        <h3>Go2 Travelling</h3>
                        <p style="text-align: justify;" data-mce-style="text-align: justify;">Jedna je od najpopularnijih turističkih agencija za mlade, koja se bavi organizacijom studentskih putovanja i stručnih ekskurzija za mlade u Srbiji. U svojoj ponudi ima preko 50 različitih tipova putovanja tokom cele godine, što podrazumeva doček Nove godine u evropskim gradovima, skijanje u najboljim skijaškim centrima, prolećna putovanja uz krstarenje Mediteranom, jesenja putovanja, letovanja. Pored putovanja, Go2 Travelling uspešno organizuje događaje i festivale kao što su Uranak festival na Srebrnom jezeru, Go2 Halloween – tradicionalni maskenbal za Noć veštica, Go2 Grudvanje- otvaranje ski sezone na Kopaoniku.</p>    </div>
                    <div class="about-box">
                        <a class="about-box-logo" href="https://www.facebook.com/go2adventure2016/?fref=ts" target="_blank" style="background-image: url('http://www.go2america.rs/images/page_items_parts/go2adventure.svg');"></a>
                        <h3>Go2 Adventure</h3>
                        <p style="text-align: justify;" data-mce-style="text-align: justify;">Go2 Adventure je deo brenda Go2 Travelling koji se bavi organizacijom avanturističkih putovanja, dalekih destinacija kao i putovanja koja su namenjena starijoj ciljnoj grupi. Go2 Adventure vas vodi na Tajland, Šri Lanku, Brazil, Vijetnam, na najbolja francuska i austrijska skijališta, kao i na jedrenje Grčkom i Hrvatskom. Pre osnivanja podbrenda Go2 Adventure, preko agencije Go2 Travelling daleke destinacije posetilo je preko 500 zadovoljnih putnika.</p>    </div>
                    <div class="about-box">
                        <a class="about-box-logo" href="http://www.go2serbia.net/" target="_blank" style="background-image: url('http://www.go2america.rs/images/page_items_parts/go2serbia.svg');"></a>
                        <h3>Go2 Serbia</h3>
                        <p style="text-align: justify;" data-mce-style="text-align: justify;">Turistički brend Go2 Serbia je jedna od osvežavajućih novina u turističkoj ponudi Beograda i Srbije. Ima za cilj da predstavi naše turističke potencijale kroz posebne programe razgledanja, ekskurzije i ture na poseban način: avionom, brodom, gliserom, vozom, autobusom i peške. Domaći i strani turisti svakoga dana imaju adekvatan program tokom kog mogu da upoznaju sve lepote prestonice i cele zemlje uz profesionalne usluge. Go2 Serbia u svojoj ponudi ima preko 15 tura preko kojih na najlepši način možete da upoznate Beograd. Pored toga, ovaj profesionalni tim uspešno organizuje razne događaje, team building-e, svečanosti, koktele, kao i noćne party ture.</p>    </div>
                    <div class="about-box">
                        <a class="about-box-logo" href="http://www.go2america.rs/" target="_blank" style="background-image: url('http://www.go2america.rs/images/page_items_parts/go2america.svg');"></a>
                        <h3>Go2 America</h3>
                        <p>Go2 America je brend posvećen organizovanju i realizovanju kulturne razmene studenata u SAD. Naš glavni cilj je pružanje kompletne usluge prilikom plasmana studenata na letnji Work and Travel program. Višegodišnje iskustvo nam omogućava da na najkvalitetniji način obavimo sve aktivnosti koje su potrebne da bi kandidat bio uspešno plasiran na program. Ono što možemo da garantujemo je da ćemo se u svakom trenutku ovog dugačkog procesa, truditi da svojim savetima i brigom za svakog studenta ponaosob, maksimalno pripremimo mlade za ovu nezaboravnu avanturu!<br></p>    </div>
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