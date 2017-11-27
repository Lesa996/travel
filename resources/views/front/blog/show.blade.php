@extends('layouts.app')
@section('content')
    @push('meta')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Go2Travel is a travel agency" />
    <meta name="keywords" content="go2, travel, go2travel, trip, adventure, hotels, flights, travelocity, vacation, travel agency" />
    <meta name="author" content="Go2Travel" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    {!! HTML::style('ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css') !!}

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
        .search{
            margin-bottom: 10%;
            margin-top: 10%;

        }
        .search > div{
            margin-bottom: 10%;
        }
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
                        <li {!! classActiveSegment(1, ['blog']) !!} {!! classActivePath('blog') !!}><a href="/blog">Blog</a></li>
                        <li {!! classActivePath('o-nama') !!}><a href="o-nama">O nama </a></li>
                        <li {!! classActivePath('kontakt') !!}><a href="kontakt">Kontakt</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    <div class="container">


        <div class="row">
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
                    @if($post->tags->count())
                        <div class="text-center">
                            <small>{{ trans('front/blog.tags') }}</small>
                            @foreach($post->tags as $tag)
                                {!! link_to('blog/tag?tag=' . $tag->id, $tag->tag, ['class' => 'btn btn-default btn-xs']) !!}
                            @endforeach
                        </div>
                    @endif
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
    {!! HTML::script('ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js') !!}

    @if(session('statut') != 'visitor')
        {!! HTML::script('ckeditor/ckeditor.js') !!}
        {!! HTML::script('js/sweetalert.min.js') !!}
    @endif

    <script>

        @if(session('statut') != 'visitor')

            $(function() {

            function ckeditorReplace(element) {
                CKEDITOR.replace(element, {
                    language: '{{ config('app.locale') }}',
                    height: 200,
                    toolbarGroups: [
                        { name: 'basicstyles', groups: [ 'basicstyles'] },
                        { name: 'links' },
                        { name: 'insert' }
                    ],
                    removeButtons: 'Table,SpecialChar,HorizontalRule,Anchor'
                });
            }

            ckeditorReplace('comments');

            function buttons(i) {
                return "<input id='val" + i +"' class='btn btn-default' type='submit' value='{{ trans('front/blog.valid') }}'><input id='btn" + i + "' class='btn btn-default btnannuler' type='button' value='{{ trans('front/blog.undo') }}'></div>";
            }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('a.editcomment span').tooltip();
            $('a.deletecomment span').tooltip();

            // Set comment edition
            $('a.editcomment').click(function(e) {
                e.preventDefault();
                $(this).hide();
                var i = $(this).attr('id').substring(7);
                var existing = $('#content' + i).html();
                var url = $('#formcreate').find('form').attr('action');
                jQuery.data(document.body, 'comment' + i, existing);
                var html = "<div class='row'><form id='form" + i + "' method='POST' action='" + url + '/' + i + "' accept-charset='UTF-8' class='formajax'><div class='form-group col-lg-12 '><label for='comments' class='control-label'>{{ trans('front/blog.change') }}</label><textarea id='cont" + i +"' class='form-control' name='comments" + i + "' cols='50' rows='10' id='comments" + i + "'>" + existing + "</textarea><small class='help-block'></small></div><div class='form-group col-lg-12'>" + buttons(i) + "</div>";
                $('#content' + i).html(html);
                ckeditorReplace('comments' + i);
            });

            // Escape edition
            $(document).on('click', '.btnannuler', function() {
                var i = $(this).attr('id').substring(3);
                $('#comment' + i).show();
                $('#content' + i).html(jQuery.data(document.body, 'comment' + i));
            });

            // Validation comment
            $(document).on('submit', '.formajax', function(e) {
                e.preventDefault();
                var i = $(this).attr('id').substring(4);
                $('#val' + i).parent().html('<i class="fa fa-refresh fa-spin fa-2x"></i>').addClass('text-center');
                $.ajax({
                    method: 'put',
                    url: $(this).attr('action'),
                    data: $(this).serialize()
                })
                    .done(function(data) {
                        $('#comment' + data.id).show();
                        $('#content' + data.id).html(data.content);
                    })
                    .fail(function(data) {
                        var errors = data.responseJSON;
                        $.each(errors, function(index, value) {
                            $('textarea[name="' + index + '"]' + ' ~ small').text(value);
                            $('textarea[name="' + index + '"]').parent().addClass('has-error');
                            $('.fa-spin').parent().html(buttons(index.slice(-1))).removeClass('text-center');
                        });
                    });
            });

            // Delete comment
            $('a.deletecomment').click(function(e) {
                e.preventDefault();
                var that = $(this);
                swal({
                    title: "{!! trans('front/blog.confirm') !!}",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "{!! trans('front/site.yes') !!}",
                    cancelButtonText: "{!! trans('front/site.no') !!}"
                }, function(isConfirm) {
                    if (isConfirm) {
                        var i = that.attr('id').substring(13);
                        that.replaceWith('<i class="fa fa-refresh fa-spin pull-right"></i>');
                        $.ajax({
                            method: 'delete',
                            url: '{!! url('comment') !!}' + '/' + i
                        })
                            .done(function(data) {
                                $('#comment' + data.id).parents('.commentitem').remove();
                            })
                            .fail(function() {
                                alert('{!! trans('front/blog.fail-delete') !!}');
                            });
                    }
                });
            });

        });

        @endif

        hljs.initHighlightingOnLoad();

    </script>
    @endpush
@endsection



