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
        <link rel="stylesheet" href="admin/jquery.countdown.css">


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
    @endpush
    @include('heder')

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
                        <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url('{{$item->cover->url}}');">
                            <div class="display-t">
                                <div class="display-tc">
                                    <div class="container">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="animate-box">
                                                <a href="{{url('putovanje',$item->naziv)}}">
                                                    <h1>Putovanje</h1>
                                                    <h2>{{$item->naziv}}</h2>
                                                    <h1>See more..</h1>
                                                </a>

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
            <div  id="countdown"></div>

        @foreach($putovanja as $item)
                <div  class="col-md-3 col-sm-3 home-page-travel " style="background-image:url('{{$item->cover->url}}') ">
                    <div class="balcken"></div>

                    <div class="travel-blog-text" style="padding: unset;">
                        <div data-countdown="{{$item->cena_do_vreme}}" class="countdown"></div>
                        <div style="padding: 15px 30px;">
                            <div class="prod-title animate-box">
                                <h3><a href="{{url('putovanje',$item->naziv)}}">{{$item->naziv}}</a></h3>
                                <p style="color: white">{{$item->opis->kratak_opis}}</p>
                                <p><a href="{{url('putovanje',$item->naziv)}}">Learn More...</a></p>
                            </div>
                        </div>

                    </div>
                    @if($item->piktogram)
                    <div class="btn-toolbar pull-right" style="position: absolute;
    top: 2%;
    right: 10%;">
                        <div class='label-latest' style="">
                            <label style="padding: auto">{{$item->piktogram}}</label>
                        </div>
                    </div>
                    @endif
                </div>
            @endforeach

        </div>

        <section>
            <div class="row ">
                @foreach($banerVeliki as $baner)
                <div class="col-md-12 col-sm-12 co-xs-12 gal-item">
                    <div class="box">
                        <a href="{{$baner->url}}" >
                            <img src="{{$baner->slika}}">
                        </a>

                    </div>
                </div>
                @endforeach
                    @foreach($banerMali as $baner)
                        <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
                            <div class="box">
                                <a href="{{$baner->url}}" >
                                    <img src="{{$baner->slika}}">
                                </a>

                            </div>
                        </div>
                    @endforeach

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
            <div class="col-md-3   col-sm-3 home-page-travel " style="background-image:url('{{$item->cover->url}}') ">
                <div class="balcken"></div>

                <div class="travel-blog-text">
                    <div class="prod-title animate-box">
                        <h3><a href="{{url('smestaj/'.$item->drzava.'/'.$item->grad.'/'.$item->naziv)}}">{{$item->naziv}}</a></h3>
                        <p style="color: white">{{$item->opis->kratak_opis}}</p>
                        <p><a href="{{url('smestaj/'.$item->drzava.'/'.$item->grad.'/'.$item->naziv)}}">Learn More...</a></p>
                    </div>
                </div>
                @if($item->piktogram)
                    <div class="btn-toolbar pull-right" style="position: absolute;
    top: 2%;
    right: 10%;">
                        <div class='label-latest' style="">
                            <label style="padding: auto">{{$item->piktogram}}</label>
                        </div>
                    </div>
                @endif
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
        <script src="admin/jquery.countdown.js"></script>


    <script >
        console.log( $('#countdown'));
        $('[data-countdown]').each(function() {
            var $this = $(this), finalDate = $(this).data('countdown');
            $this.countdown({
                timestamp	: new Date(finalDate),
                callback	: function(days, hours, minutes, seconds) {

                }
                });
        });


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
                    wrapper:false,

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