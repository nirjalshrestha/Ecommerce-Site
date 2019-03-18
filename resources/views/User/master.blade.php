
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('img/fav-icon.png')}}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RamroBazar</title>

    <!-- Icon css link -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/line-icon/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/elegant-icon/style.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Rev slider css -->
    <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('vendors/owl-carousel/dist/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/owl-carousel/dist/assets/owl.theme.default.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/bootstrap-selector/css/bootstrap-select.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{asset('https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')}}"></script>
    <script src="{{asset('https://oss.maxcdn.com/respond/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body>

<!--================Top Header Area =================-->
<div class="header_top_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="top_header_left">
                    <div class="selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                            <option value='yt' data-image="img/icon/flag-1.png" data-imagecss="flag yt" data-title="English">English</option>
                            <option value='yu' data-image="img/icon/flag-1.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                        </select>
                    </div>
                    <select class="selectpicker usd_select">
                        <option>USD</option>
                        <option>Rs</option>
                        <option>Rs</option>
                    </select>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search">
                        <span class="input-group-btn">
                                <button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
                                </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="top_header_middle">
                    <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+9779841504466</span></a>
                    <a href="#"><i class="fa fa-envelope"></i> Email: <span>Nirzalshrestha.com</span></a>
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top_right_header">
                    <ul class="header_social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                    <ul class="top_right">
                        <li class="user"><a href="#"><i class="icon-user icons"></i></a></li>
                        <li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                        <li class="h_price">
                            <select class="selectpicker">
                                <option>Rs0.00</option>
                                <option>Rs0.00</option>
                                <option>Rs0.00</option>
                            </select>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Top Header Area =================-->

<!--================Menu Area =================-->
<header class="shop_header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav categories">
                    <li class="nav-item">
                        <select class="selectpicker">
                            <option>Categories</option>
                            <option>Shoes</option>
                            <option>Electronic</option>
                            <option>Gadgets</option>
                            <option>Dresses</option>
                        </select>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown submenu active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{asset('index.html')}}">Home Simple</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('home-carousel.html')}}">Home Carousel</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('home-fullwidth.html')}}">Home Full Width</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('home-parallax.html')}}">Home Parallax</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('home-sidebar.html')}}">Home Boxed</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('home-fixed-menu.html')}}">Home Fixed</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{asset('compare.html')}}">Compare</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('checkout.html')}}">Checkout Method</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('register.html')}}">Checkout Register</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('track.html')}}">Track</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('login.html')}}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('404.html')}}">404</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{asset('categories-no-sidebar-2column.html')}}">Prodcut No Sidebar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('categories-no-sidebar-3column.html')}}">Prodcut Two Column</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('categories-no-sidebar-4column.html')}}">Product Grid</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('categories-left-sidebar.html')}}">Categories Left Sidebar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('categories-right-sidebar.html')}}">Categories Right Sidebar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('categories-grid-left-sidebar.html')}}">Categories Grid Sidebar</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('product-details.html')}}">Prodcut Details 01</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('product-details2.html')}}">Prodcut Details 02</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('product-details3.html')}}">Prodcut Details 03</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('shopping-cart.html')}}">Shopping Cart 01</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('shopping-cart2.html')}}">Shopping Cart 02</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{asset('empty-cart.html')}}">Empty Cart</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">lookbook</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset('contact.html')}}">Contact</a></li>
                </ul>
            </div>

        </nav>
    </div>
</header>
<!--================End Menu Area =================-->

@yield('content')

<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
        <div class="footer_widgets">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-6">
                    <aside class="f_widget f_about_widget">
                        <img src="{{asset('img/logo.png')}}" alt="">
                        <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
                        <h6>Social:</h6>
                        <ul>
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_youtube"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_info_widget">
                        <div class="f_w_title">
                            <h3>Information</h3>
                        </div>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Delivery information</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Returns & Refunds</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_service_widget">
                        <div class="f_w_title">
                            <h3>Customer Service</h3>
                        </div>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Ordr History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_extra_widget">
                        <div class="f_w_title">
                            <h3>Extras</h3>
                        </div>
                        <ul>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_account_widget">
                        <div class="f_w_title">
                            <h3>My Account</h3>
                        </div>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Ordr History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </h5>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<!-- Extra plugin css -->
<script src="{{asset('vendors/counterup/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('vendors/counterup/jquery.counterup.min.js')}}"></script>
<script src="{{asset('vendors/owl-carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-selector/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendors/image-dropdown/jquery.dd.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendors/vertical-slider/js/jQuery.verticalCarousel.js')}}"></script>
<script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>

<script src="{{asset('js/theme.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
    })
    </script>
</body>
</html>
