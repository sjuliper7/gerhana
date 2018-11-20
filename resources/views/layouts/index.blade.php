<!DOCTYPE html>
<html lang="en">
<head>
    <title>BatakZone</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{!! asset('template/styles/bootstrap4/bootstrap.min.css') !!}" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{!! asset('template/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') !!}" media="all"
          rel="stylesheet" type="text/css"/>
    <link href="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.css') !!}" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') !!}" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{!! asset('template/plugins/OwlCarousel2-2.2.1/animate.css') !!}" media="all" rel="stylesheet"
          type="text/css"/>
    <link href="{!! asset('template/plugins/slick-1.8.0/slick.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('template/styles/main_styles.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{!! asset('template/styles/responsive.css') !!}" media="all" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{!! asset('template/js/jquery-3.3.1.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/styles/bootstrap4/popper.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/styles/bootstrap4/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/greensock/TweenMax.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/greensock/TimelineMax.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/scrollmagic/ScrollMagic.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/greensock/animation.gsap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/greensock/ScrollToPlugin.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/OwlCarousel2-2.2.1/owl.carousel.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/slick-1.8.0/slick.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/plugins/easing/easing.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('template/js/custom.js') !!}"></script>
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

                        <div class="top_bar_content ml-auto">

                            <div class="top_bar_user text-center">
                                @if(Auth::guest())
                                    <div></div>
                                    <div><a href="/register">Register</a></div>
                                    <div><a href="/login">Sign in</a></div>
                                @else
                                    <div class="dropdown" style="width:20em ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-user"></span> 
                                            <strong class="fa fa-user-circle"> {{Auth::user()->name}}</strong>
                                            <span class="glyphicon glyphicon-chevron-down"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <div class="row">
                                                                    <img src="images/kelola_akun.png"
                                                                         style="max-width:15%;max-height: 15%;margin-left: 0em">
                                                                    <div class="text-left col-md-6">
                                                                        <p class="font-weight-normal">Kelola Akun</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <a href="/transactions">
                                                                <div class="col-md-12" style="margin-top: 0em">
                                                                    <div class="row">
                                                                        <img src="images/box_closed.png"
                                                                             style="max-width:15%;max-height: 15%">
                                                                        <div class="col-md-6">
                                                                            <p class="font-weight-normal">Pesanan Saya</p>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </a>

                                                            <div class="col-md-12" style="margin-top: 2em">
                                                                <div class="row">
                                                                    <img src="images/logout.png"
                                                                         style="max-width:15%;max-height: 15%">
                                                                    <div class="col-md-6">
                                                                        <form id="logout-form"
                                                                              action="{{ url('/logout') }}"
                                                                              method="POST" style="border: 0em">
                                                                            {{ csrf_field() }}
                                                                            <input type="submit" value="logout">
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endif


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

                <div class="col-lg-2">
                     <div class="footer_column">
                    <div class="footer_title"><h4>BatakZone</h4></div>
                    <ul class="footer_list">
                        <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Tentang Kami</h5></a></div>
                        <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Hubungi Kami</h5></a></div>
                    </ul>

                     </div>

                </div>

                <div class="col-lg-2 ">
                    <div class="footer_column">
                        <div class="footer_title"><h4>Beli</h4></div>
                        <ul class="footer_list">
                            <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Cara Belanja</h5></a></div>
                            <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Pembayaran</h5></a></div>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                     <div class="footer_column">
                     <div class="footer_title"><h4>Jual</h4></div>
                        <ul class="footer_list">
                            <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Cara Berjualan Online</h5></a></div>
                            <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Pencairan Dana</h5></a></div>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="footer_column">
                        <div class="footer_title"><h4>Bantuan</h4></div>
                        <ul class="footer_list">
                            <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Syarat dan Ketentuan</h5></a></div>
                            <div class="footer_subtitle"><a href="#"><h5 style="color: #8b0000"> Kebijakan Privasi</h5></a></div>

                            <div class=""style="margin-bottom: 1em"><img src="images/phone_icon.png"style="max-width: 100%;max-height: 100%">+62 821-6548-5311</div>
                            <div class=""style="margin-bottom: 1em"><img src="images/email_icon.png"style="max-width: 100%;max-height: 100%"> cs@batakzone.com</div>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="row">
                    <div class="col-md-4">
                        <img src="images/mobile.png"style="max-width: 80%;max-height: 80%">
                    </div>

                        <div class="col-md-8">
                            <a href="" > <h5 style="color: #8b0000"> Dapatkan Aplikasi Mobile BatakZone >></h5></a>

                            <h5 style="color: #8b0000"> Ikuti Kami</h5>
                            <div class="footer_social">
                                <ul>
                                    <li ><a href="#"><i class="fab fa-facebook-f" style="color: #8b0000"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" style="color: #8b0000"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube" style="color: #8b0000"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google" style="color: #8b0000"></i></a></li>
                                    <li><a href="#"><i class="fab fa-vimeo-v" style="color: #8b0000"></i></a></li>
                                </ul>
                            </div>
                        </div>
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

                    <div
                        class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
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

</body>

</html>
