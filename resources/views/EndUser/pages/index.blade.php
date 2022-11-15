@extends('EndUser.master')

@section('title')
    Touché
@endsection
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="intro-text">
                        <h1>Touché</h1>
                        <p>Restaurant / Coffee / Pub</p>
                        <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Story</a></div>
                </div>
            </div>
        </div>
    </div>
</header>
@section('content')
    <!-- About Section -->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 ">
                    <div class="about-img">
                        <img src="{{ asset('assetsEndUser/img/about.jpg') }}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Our Restaurant</h2>
                        <hr>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                            diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec
                            ornare diam commodo nibh.
                        </p>
                        <h3>Awarded Chefs</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare
                            diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec
                            ornare.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Restaurant Menu Section -->
    <div id="restaurant-menu">
        <div class="section-title text-center center">
            <div class="overlay">
                <h2>Menu</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Breakfast & Starters</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$35</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$30</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$30</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$30</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Main Course</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$45</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$30</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$30</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Delicious Dish</div>
                            <div class="menu-item-price">$30</div>
                            <div class="menu-item-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                duis sed dapibus leo nec ornare diam.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Section -->
        <div id="gallery">
            <div class="section-title text-center center">
                <div class="overlay">
                    <h2>Gallery</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
                </div>
            </div>
            @include('EndUser.pages.gallery')
        </div>
    </div>
    <!-- Team Section -->
    <div id="team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 section-title">
                    <h2>Meet Our Chefs</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
                </div>
                <div id="row">
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="{{asset('assetsEndUser/img/team/01.jpg')}}" alt="..."></div>
                            <div class="caption">
                                <h3>Mike Doe</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="{{asset('assetsEndUser/img/team/02.jpg')}}" alt="..."></div>
                            <div class="caption">
                                <h3>Chris Doe</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 team">
                        <div class="thumbnail">
                            <div class="team-img"><img src="{{asset('assetsEndUser/img/team/03.jpg')}}" alt="..."></div>
                            <div class="caption">
                                <h3>Ethan Doe</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec
                                    ornare diam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Call Reservation Section -->
    <div id="call-reservation" class="text-center">
        <div class="container">
            <h2>Want to make a reservation? Call <strong>1-887-654-3210</strong></h2>
        </div>
    </div>
    <!-- Contact Section -->
    <div id="contact" class="text-center">
        <div class="container">
            <div class="section-title text-center">
                <h2>Contact Form</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
            </div>
            <div class="col-md-10 col-md-offset-1">
                <form action="{{ route('endUser.contact_us.store') }}" method="post" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name"
                                       class="form-control @error('name') is-invalid @enderror" placeholder="Name"
                                       required="required">
                                @error('name')
                                <p class="help-block text-danger">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" id="email" name="email"
                                       class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                       required="required">
                                @error('email')
                                <p class="help-block text-danger">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <textarea name="message" id="message" name="message"
                              class="form-control @error('message') is-invalid @enderror" rows="4" placeholder="Message"
                              required></textarea>
                        @error('message')
                        <p class="help-block text-danger">
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
