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


        <!-- Modernizr JS -->
            <script src="js/modernizr-2.6.2.min.js"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
    <style>
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
                {{--<h3> </h3>--}}
                <!-- START #fh5co-menu-wrap -->
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li {!! classActivePath('/') !!} ><a href="/" >Pocetna</a></li>
                        <li {!! classActivePath('putovanje') !!} ><a href="putovanje" >Putovanja</a></li>
                        <li {!! classActivePath('smestaj') !!} ><a href="smestaj">Smestaj</a></li>
                        <li {!! classActivePath('blog') !!}><a href="blog">Blog</a></li>
                        <li {!! classActivePath('o-nama') !!}><a href="o-nama">O nama </a></li>
                        <li {!! classActivePath('kontakt') !!}><a href="kontakt">Kontakt</a></li>
                        <li class="active"><a>Kontakt: +381 18 257 991 </a> </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div class="fh5co-hero" data-section="home">
            {{--<div class="fh5co-overlay"></div>--}}
            <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner carousel-zoom">
                    @foreach($glavni as $key => $item)
                        <div class="item @if($key==0) active @endif">
                        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{$item->cover->url}});">
                            <div class="display-t">
                                <div class="display-tc">
                                    <div class="container">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="animate-box">
                                                <h1>Putovanje</h1>
                                                <h2>{{$item->naziv}}</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>


        <!-- end:header-top -->

        <div id="fh5co-started" data-stellar-background-ratio="0.5" style="background-image:url(images/pexels-photo-248771.jpeg)" >
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section">
                        <h2>Pretrazite putovanja</h2>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Gde</label>
                                    <input type="name" class="form-control" id="name" placeholder="Gde">
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="email" class="sr-only">Kad</label>
                                    <input type="email" class="form-control" id="email" placeholder="Kad">
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

        <div class="row">
            @foreach($putovanja as $item)
                <div class="col-md-3 col-sm-3 home-page-travel " style="background-image:url({{$item->cover->url}}) ">
                    <div class="balcken"></div>

                    <div class="travel-blog-text">
                        <div class="prod-title animate-box">
                            <h3><a href="{{url('putovanje',$item->naziv)}}">{{$item->naziv}}</a></h3>
                            <p style="color: white">{{$item->opis->kratak_opis}}</p>
                            <p><a href="{{url('putovanje',$item->naziv)}}">Learn More...</a></p>
                        </div>
                    </div>

                </div>
            @endforeach

        </div>

        <section>
            <div class="row ">
                <div class="col-md-8 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#1">
                            <img src="{{asset('images/pexels-photo-1.jpeg')}}">
                        </a>
                        <div class="modal fade" id="1" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="{{asset('images/pexels-photo-1.jpeg')}}">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the first one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#2">
                            <img src="{{asset('images/pexels-photo-2.jpeg')}}">
                        </a>
                        <div class="modal fade" id="2" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="{{asset('images/pexels-photo-2.jpeg')}}">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the second one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#3">
                            <img src="{{asset('images/pexels-photo-3.jpeg')}}">
                        </a>
                        <div class="modal fade" id="3" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="{{asset('images/pexels-photo-3.jpeg')}}">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the third one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#4">
                            <img src="{{asset('images/pexels-photo-4.jpeg')}}">
                        </a>
                        <div class="modal fade" id="4" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="{{asset('images/pexels-photo-4.jpeg')}}">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the fourth one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#5">
                            <img src="images/pexels-photo-5.jpeg">
                        </a>
                        <div class="modal fade" id="5" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="images/pexels-photo-5.jpeg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the fifth one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#6">
                            <img src="images/pexels-photo-6.jpeg">
                        </a>
                        <div class="modal fade" id="6" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="images/pexels-photo-6.jpeg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the sixth one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#7">
                            <img src="images/pexels-photo-7.jpeg">
                        </a>
                        <div class="modal fade" id="7" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="images/pexels-photo-7.jpeg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the seventh one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                    <div class="box">
                        <a href="#" data-toggle="modal" data-target="#8">
                            <img src="images/pexels-photo-8.jpeg">
                        </a>
                        <div class="modal fade" id="8" tabindex="-1" role="dialog">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <div class="modal-body">
                                        <img src="images/pexels-photo-8.jpeg">
                                    </div>
                                    <div class="col-md-12 description">
                                        <h4>This is the eighth one on my Gallery</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    <div id="fh5co-started" data-stellar-background-ratio="0.5" style="background-image:url(images/sunrise-phu-quoc-island-ocean.jpg)" >
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center heading-section">
                    <a href="putovanje">
                        <h2 >Last Minute</h2>
                        <h3>More here...</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="fh5co-started" data-stellar-background-ratio="0.5" style="background-image:url(images/pexels-photo-227417.jpeg);"data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center heading-section">
                        <h2>Pretrazite lokaciju</h2>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-10 col-md-offset-3">
                        <form class="form-inline">
                            <div class="col-md-4 col-sm-4">
                                <div class="form-group">
                                    <label for="name" class="sr-only">Lokacija</label>
                                    <input type="name" class="form-control" id="name" placeholder="Lokacija">
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

        <div class="row">
            @foreach($smestaji as $item)
            <div class="col-md-3   col-sm-3 home-page-travel " style="background-image:url({{$item->cover->url}}) ">
                <div class="balcken"></div>

                <div class="travel-blog-text">
                    <div class="prod-title animate-box">
                        <h3><a href="{{url('smestaj/'.$item->drzava.'/'.$item->grad.'/'.$item->naziv)}}">{{$item->naziv}}</a></h3>
                        <p style="color: white">{{$item->opis->kratak_opis}}</p>
                        <p><a href="{{url('smestaj/'.$item->drzava.'/'.$item->grad.'/'.$item->naziv)}}">Learn More...</a></p>
                    </div>
                </div>

            </div>
            @endforeach
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

            $(window).stellar();
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