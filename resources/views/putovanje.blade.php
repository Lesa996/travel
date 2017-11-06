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

    </style>
    @endpush
    <header id="fh5co-header-section" class="sticky-banner">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                <h1 id="fh5co-logo"><a href="index.html">Go2Travel</a></h1>
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li ><a href="index.html" >Pocetna</a></li>
                        <li class="active" ><a href="groom-bride.html" >Putovanja</a></li>
                        <li><a href="when-where.html">Smestaj</a></li>
                        <li><a href="guest.html">Blog</a></li>
                        <li><a href="gallery.html">O nama </a></li>
                        <li ><a href="blog.html">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="fh5co-hero" data-section="home">
        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/pexels-photo-221532.jpeg);">

            <div class="display-t">
                <div class="display-tc">
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="animate-box">
                                <h1>Letovanje</h1>
                                <h2>Grcka</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="">
        <ul class="nav nav-tabs nav-bar-putovanja">
            <li ><a href="#Informacije" data-toggle="tab"><i class="glyphicon glyphicon-list-alt"></i> Informacije</a></li>
            <li class="active"><a href="#Cenovnik" data-toggle="tab" ><i class="glyphicon glyphicon-eur"></i> Cenovnik</a></li>
            <li><a href="#PlanPuta" data-toggle="tab"><i class="fa fa-map-o"></i> Plan puta</a></li>
            <li><a href="#Smestaji" data-toggle="tab"><i class="fa fa-building-o"></i> Smestaji</a></li>
            <li><a href="#Izleti" data-toggle="tab"><i class="fa fa-tree"></i> Izleti</a></li>
        </ul>
        <div class="tab-content clearfix">
            <div class="tab-pane" id="Informacije">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h1 class="putovanje-naziv">Letovanje Grcka</h1>
                            <div class="precrtana-cena">
                                <h3 class="cena">
                                    <i class="glyphicon glyphicon-eur"></i>
                                    350
                                </h3>
                            </div>
                            <div class="aktuelna-cena">
                                <h3 class="cena">
                                    /<i class="glyphicon glyphicon-eur"></i>
                                    250
                                </h3>
                            </div>
                            <br>
                            <div class="text">
                                <br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec posuere metus et tortor pulvinar venenatis. Aliquam erat volutpat. Nam ultrices semper felis, at laoreet metus laoreet a. Praesent orci orci, pretium ut tortor euismod, vehicula blandit purus. Aliquam suscipit, erat a maximus mollis, neque odio aliquam arcu, ut consequat leo nisi sit amet leo. Nam consectetur diam id libero fringilla, eu commodo arcu congue.</p>
                            </div>
                            <br>
                            <div>
                                <i class="glyphicon glyphicon-time"></i>
                                10 Dana
                            </div>
                            <br>

                            <div class="">
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Destinacija</div>
                                    <div class="col-md-3 opis-text">Grcka</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Polazak</div>
                                    <div class="col-md-3 opis-text">Nis</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Vreme polaska</div>
                                    <div class="col-md-3 opis-text">8:00</div>
                                </div>
                                <div class="row">
                                    <hr>
                                    <div class="col-md-4 opis-naziv">Cena obuhvata</div>
                                    <div class="col-md-3 opis-text">
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
                                    <div class="col-md-4 opis-naziv">Cena ne obuhvata</div>
                                    <div class="col-md-3 opis-text">
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
                        <div class="col-md-4">
                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSekWQ54JyyBrggP9B_gD_BvnXNR73b8BXqMz9Gb4P6PQ_DA8w/viewform?embedded=true" width="auto" height="700" frameborder="0" marginheight="1" marginwidth="1">Loading...</iframe>
                        </div>
                        <div class="col-md-10">
                            <hr>

                        </div>
                    </div>

                </div>


            </div>
            <div class="tab-pane active" id="Cenovnik">
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="putovanje-naziv">Letovanje Grcka</h1>
                            <div class="cenovnik">
                                <div class="heder-cenovnika row">
                                    <div class="col-xs-6 opis-naziv">
                                        Smestaj
                                    </div>
                                    <div class="col-xs-3 opis-naziv">
                                        Tip smestaja
                                    </div>
                                    <div class="col-xs-3 opis-naziv">
                                        29.12. - 03.01.
                                    </div>
                                </div>
                                <hr>
                                <div class="content-cenovnika row">
                                    <div class="col-xs-6 opis-text">
                                        <div>
                                            <i class="glyphicon glyphicon-info-sign"></i> Hotel Start 2*
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
                                        <div>1/4 sa doručkom</div>
                                        <div>1/3 sa doručkom</div>
                                        <div>1/2 sa doručkom</div>
                                    </div>
                                    <div class="col-xs-3 opis-text">
                                        <div class="text-center">105 <i class="glyphicon glyphicon-eur"></i></div>
                                        <div class="text-center">115 <i class="glyphicon glyphicon-eur"></i></div>
                                        <div class="text-center">125 <i class="glyphicon glyphicon-eur"></i></div>

                                    </div>
                                </div>
                                <hr>
                                <div class="content-cenovnika row">
                                    <div class="col-xs-6 opis-text">
                                        <div>
                                            <i class="glyphicon glyphicon-info-sign"></i> HOTEL Q 3++*
                                            <div class="rating">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-3 opis-text">
                                        <div>1/4 sa doručkom</div>
                                        <div>1/3 sa doručkom</div>
                                        <div>1/2 sa doručkom</div>
                                    </div>
                                    <div class="col-xs-3 opis-text">
                                        <div class="text-center">105 <i class="glyphicon glyphicon-eur"></i></div>
                                        <div class="text-center">115 <i class="glyphicon glyphicon-eur"></i></div>
                                        <div class="text-center">125 <i class="glyphicon glyphicon-eur"></i></div>

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
                <h3>PLAN We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
            </div>
            <div class="tab-pane" id="Smestaji">
                <h3>SME We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
            </div>
            <div class="tab-pane" id="Izleti">
                <h3>IZL We use css to change the background color of the content to be equal to the tab</h3>
            </div>
        </div>
    </div>


    @push('scripts')
    <!-- Google Map -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script> -->
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