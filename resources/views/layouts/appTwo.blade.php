<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Go2Travel</title>

    @stack('meta')

    @stack('stylesheets')

</head>

<body class="theme-amber">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->

<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->


<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="/">Go2Travel - Admin Panel</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{url('admin/images/user.png')}}" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                <div class="email">john.doe@example.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li {!! classActiveSegment(2, ['smestaj']) !!} {!! classActiveSegment(3, ['smestaj']) !!} >
                    <a href="{{url('app/smestaj')}}" {!! classActiveSegment(2, ['smestaj']) !!}>
                        <i class="material-icons">home</i>
                        <span>Smestaj</span>
                    </a>

                </li>
                <li {!! classActiveSegment(2, ['putovanje']) !!} {!! classActiveSegment(3, ['putovanje']) !!}>
                    <a href="{{url('app/putovanje')}}" >
                        <i class="material-icons">work</i>
                        <span>Putovanje</span>
                    </a>

                </li>
                <li {!! classActiveSegment(1, ['articles']) !!}>
                    <a href="{{url('articles')}}" >
                        <i class="material-icons">format_textdirection_l_to_r</i>
                        <span>Blog</span>
                    </a>

                </li>
                <li {!! classActiveSegment(2, ['file-manager']) !!}>
                    <a href="{{url('app/file-manager')}}" >
                        <i class="material-icons">create</i>
                        <span>File Menager</span>
                    </a>

                </li>

                <li {!! classActiveSegment(1, ['contact']) !!}>
                    <a href="{{url('contact')}}" >
                        <i class="material-icons">mail</i>
                        <span>Kontakt</span>
                    </a>

                </li>

            </ul>
        </div>
        <!-- #Menu -->

    </aside>
    <!-- #END# Left Sidebar -->

</section>

<section class="content">
    @yield('content')
</section>

@stack('scripts')

</body>

</html>