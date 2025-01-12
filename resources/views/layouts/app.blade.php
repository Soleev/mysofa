<!DOCTYPE html>
<html lang="ru">
<head>
    <script src="https://analytics.ahrefs.com/analytics.js" data-key="MxK/5aHLhSrFvr7oVGGkLg" defer="true"></script>
    <!-- Google Tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z1T5J1FJNS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-Z1T5J1FJNS');
    </script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Favicon and Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/favicon.png">

    <meta name="author" content="Shoxrux Soleyev">
    <title>@yield('title') | MySofa</title>
    <meta name="description" content="@yield('description')">
    <!-- Canonical URL -->
    <link rel="canonical" href="@yield('canonical', url()->current())">
    <!-- CSS Libraries -->
    <link href="{{ asset('/assets/plugins/fontawesome-free-6.6.0-web/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/plugins/exist-font/style.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="/assets/plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="/assets/plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="/assets/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="/assets/plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="/assets/plugins/revolution/css/navigation.css">
    <link rel="stylesheet" href="/assets/css/sliders/slider-2.css">
    <!-- Custom Styles -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

</head>
<body class="ps-loading">
<header class="header header--1" data-sticky="true">
    <nav class="navigation">
        <div class="ps-container-fluid">
            <div class="left"><a class="ps-logo" href="/"><img src="/assets/images/logo.png" alt=""></a></div>
            <div class="center">
                <ul class="menu">
                    <li><a href="/catalog">Каталог</a></li>
                    <li><a href="/about">О нас</a></li>
                    <li><a href="/contacts">Контакты</a></li>
                </ul>

            </div>
            <div class="right">
                <div class="menu-toggle"><span></span></div>
                <ul class="header__actions">
                    <li><a class="ps-search-btn" href="#"><i class="exist-search"></i></a></li>
                    <li class="header__user"><a href="#" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" id="shopping-action"><i
                                class="exist-user"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="shopping-action" id="shopping-action">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li><a href="#">Whishlist</a></li>
                        </ul>
                    </li>
                    <li class="header__cart"><a class="ps-shopping" href="#" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false" id="shopping-cart"><i
                                class="exist-minicart"></i><span><i>0</i></span></a>
                        <ul class="dropdown-menu" aria-labelledby="shopping-cart" id="shopping-list">
                            <li><span class="ps-product--shopping-cart"><a class="ps-product__thumbnail"
                                                                           href="product-detail.html"><img
                                            src="images/cart/1.jpg" alt=""></a><span class="ps-product__content"><a
                                            class="ps-product__title" href="#">T-shirt blue with slogan</a><span
                                            class="ps-product__quantity">1 x <span> $5250.00</span></span>
                                    </span><a class="ps-product__remove" href="#"><i class="fa fa-trash"></i></a></span>
                            </li>
                            <li><span class="ps-product--shopping-cart"><a class="ps-product__thumbnail"
                                                                           href="product-detail.html"><img
                                            src="images/cart/2.jpg" alt=""></a><span class="ps-product__content"><a
                                            class="ps-product__title" href="#">T-shirt blue with slogan</a><span
                                            class="ps-product__quantity">1 x <span> $5250.00</span></span>
                                    </span><a class="ps-product__remove" href="#"><i class="fa fa-trash"></i></a></span>
                            </li>
                            <li class="total">
                                <p>Total: <span> $5250.00</span></p><a class="ps-btn" href="#">Go to cart</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- Основной контент -->
@yield('content')
<!-- Подвал сайта -->

<footer class="ps-footer--1">
    <div class="ps-container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                <div class="ps-footer__copyright">
                    <p><a href="https://t.me/soleyev">made by Soleyev</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                <ul class="ps-footer__nav">
                    <li><a href="#">Правила</a></li>
                    <li><a href="#">Термины</a></li>
                    <li><a href="#">Блог</a></li>
                    <li><a href="/faqs">FAQs</a></li>
                    <li><a href="/about-me">Обо мне</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                <ul class="ps-footer__social">
                    <li><a href="https://www.instagram.com/my_sofa.uz/" target="_blank"><i
                                class="fa-brands fa-instagram"></i>instagram</a></li>
                    <li><a href="https://t.me/mysofa_uz" target="_blank"><i
                                class="fa-brands fa-telegram"></i>telegram</a></li>
                    <li><a href="https://www.facebook.com/Mysofa.uz/" target="_blank"><i
                                class="fa-brands fa-facebook"></i>facebook</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="back2top">На вверх<i class="exist-rightarrow"></i></div>
</footer>

<!-- Подключение скриптов -->
<!-- JS Library-->
<script type="text/javascript" src="/assets/plugins/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script type="text/javascript" src="/assets/plugins/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="/assets/plugins/imagesloaded.pkgd.js"></script>
<script type="text/javascript" src="/assets/plugins/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/assets/plugins/slick/slick/slick.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery.matchHeight-min.js"></script>
<script type="text/javascript" src="/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/assets/plugins/wow.min.js"></script>
<script type="text/javascript" src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Custom scripts-->
<script src="{{ asset('assets/js/main.js') }}"></script>
<script type="text/javascript" src="/assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript"
        src="/assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript"
        src="/assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript"
        src="/assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript"
        src="/assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript"
        src="/assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript"
        src="/assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>

<script src="/assets/js/slider_2.js"></script>
</body>
</html>
