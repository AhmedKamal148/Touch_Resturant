<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="{{ asset('assetsEndUser/img/favicon.ico') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('assetsEndUser/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assetsEndUser/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assetsEndUser/img/apple-touch-icon-114x114.png') }}">

    @include('EndUser.layout.head')
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="#page-top">Touché</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html" class="page-scroll">Home</a></li>
                <li><a href="menu.html" class="page-scroll">Menu</a></li>
                <li><a href="gallery.html" class="page-scroll">Gallery</a></li>
                <li><a href="chefs.html" class="page-scroll">Chefs</a></li>
                <li><a href="contact.html" class="page-scroll">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1>Touché</h1>
                        <p>Restaurant / Coffee / Pub</p>
                        <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a> </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<div id="footer">
    <div class="container text-center">
        <div class="col-md-4">
            <h3>Address</h3>
            <div class="contact-item">
                <p>4321 California St,</p>
                <p>San Francisco, CA 12345</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Opening Hours</h3>
            <div class="contact-item">
                <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
                <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Contact Info</h3>
            <div class="contact-item">
                <p>Phone: +1 123 456 1234</p>
                <p>Email: info@company.com</p>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center copyrights">
        <div class="col-md-8 col-md-offset-2">
            <div class="social">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
            <p>&copy; 2016 Touché. All rights reserved. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
        </div>
    </div>
</div>
@include('EndUser.layout.footer-js')
</body>

</html>
