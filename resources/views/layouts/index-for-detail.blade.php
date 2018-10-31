<!DOCTYPE html>
<html lang="en">
<head>
    <title>BatakZone</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{!! asset('template/styles/bootstrap4/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('template/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('template/plugins/OwlCarousel2-2.2.1/animate.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('template/styles/product_styles.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('template/styles/product_responsive.css') !!}" media="all" rel="stylesheet" type="text/css" />

    {{--JQuery--}}
    <script type="text/javascript" src="{!! asset('template/js/jquery-3.3.1.min.js') !!}"></script>
    {{--Validator--}}
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js')}}"></script>
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="template/images/phone.png" alt=""></div>+38 068 005 3570</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="template/images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li>
                                        <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="top_bar_user">
                                <div class="user_icon"><img src="template/images/user.svg" alt=""></div>
                                <div><a href="#">Register</a></div>
                                <div><a href="#">Sign in</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @yield('header')

    </header>

    @yield('content')

<!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#">BatakZone</a></div>
                        </div>
                        <div class="footer_title">Got Question? Call Us 24/7</div>
                        <div class="footer_phone">+38 068 005 3570</div>
                        <div class="footer_contact_text">
                            <p>17 Princess Road, London</p>
                            <p>Grester London NW18JR, UK</p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Find it Fast</div>
                        <ul class="footer_list">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                        </ul>
                        <div class="footer_subtitle">Gadgets</div>
                        <ul class="footer_list">
                            <li><a href="#">Car Electronics</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Video Games & Consoles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Computers & Laptops</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Customer Care</div>
                        <ul class="footer_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="template/images/logos_1.png" alt=""></a></li>
                                <li><a href="#"><img src="template/images/logos_2.png" alt=""></a></li>
                                <li><a href="#"><img src="template/images/logos_3.png" alt=""></a></li>
                                <li><a href="#"><img src="template/images/logos_4.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{!! asset('template/styles/bootstrap4/popper.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/styles/bootstrap4/bootstrap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/greensock/TweenMax.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/greensock/TimelineMax.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/scrollmagic/ScrollMagic.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/greensock/animation.gsap.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/greensock/ScrollToPlugin.min.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}"></script>
<script type="text/javascript" src="{!! asset('template/plugins/easing/easing.js') !!}"></script>
{{--<script type="text/javascript" src="{!! asset('template/js/custom.js') !!}"></script>--}}

</body>

</html>
