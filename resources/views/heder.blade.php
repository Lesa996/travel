
<div id="top-div" class="top-navbar  animated fadeIn"  style="position: absolute;
    z-index: 1022; background-color: rgba(251, 172, 23, 0.75);
    width: 100%;">
    <div class="container">
        <div class="call-support col-sm-6 col-xs-6">
            <span><a href="tel:+38118257991" style="color: white">Kontakt: +381 18 257 991</a></span>
        </div>

    </div>
</div>
<header id="fh5co-header-section" class="sticky-banner" style="position: fixed !important">

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
                    <li {!! classActivePath('/') !!} ><a href="{{url('/')}}" >Pocetna</a></li>
                    <li {!! classActivePath('putovanje') !!} {!! classActiveSegment(1, ['putovanje']) !!}><a href="{{url('putovanje')}}" >Putovanja</a></li>
                    <li {!! classActivePath('smestaj') !!} {!! classActiveSegment(1, ['smestaj']) !!} ><a href="{{url('smestaj')}}">Smestaj</a></li>
                    <li {!! classActivePath('blog') !!} {!! classActiveSegment(1, ['blog']) !!}><a href="{{url('blog')}}">Blog</a></li>
                    <li {!! classActivePath('o-nama') !!}><a href="{{url('o-nama')}}">O nama </a></li>
                    <li {!! classActivePath('kontakt') !!}><a href="{{url('kontakt')}}">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

