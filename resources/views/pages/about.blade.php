@extends('layouts.app')
@section('content')
@section('title', 'О нас - MySofa')
@section('description', 'Узнайте больше о компании MySofa, лидере в производстве и продаже качественной мебели.')

<div class="ps-hero bg--cover" data-background="assets/images/hero/shop-1.jpg"
    style="background: url(&quot;assets/images/hero/shop-1.jpg&quot;);">
    <div class="container">
        <h2 class="ps-hero__heading">О нас</h2>
        <div class="ps-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="/">Главная </a></li>
                <li class="active"> Мы</li>
            </ol>
        </div>
    </div>
</div>
<div class="ps-about-features">
    <div class="container">
        <div class="ps-section__header">
            <h3 class="ps-heading">Все о нас!</h3>
            <p>Добро пожаловать в <strong>MySofa</strong>, компанию, которая делает ваши мечты о комфорте реальностью! Мы специализируемся на производстве и продаже высококачественной мебели для дома, офиса и коммерческих помещений.</p>
            <p>Наша главная цель — предложить нашим клиентам мебель, которая сочетает в себе стиль, качество и функциональность. Мы верим, что каждая деталь важна, поэтому тщательно отбираем материалы и применяем инновационные технологии для создания мебели, которая прослужит вам долгие годы.</p>

        </div>
        <div class="ps-section__content">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Доступность </h3>
                        <p>Мы предлагаем мебель по доступным ценам, без ущерба для качества.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Экологичность </h3>
                        <p>Мы используем экологически чистые материалы и заботимся об окружающей среде.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Качество</h3>
                        <p>Мы используем только проверенные материалы и строго контролируем процесс производства на каждом этапе.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Дизайн</h3>
                        <p>Наши модели мебели созданы с учётом современных тенденций в дизайне интерьера.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Комфорт</h3>
                        <p>Мебель MySofa создаётся с заботой о вашем комфорте и эргономике.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Индивидуальный подход</h3>
                        <p>Мы предлагаем услуги по разработке мебели на заказ, чтобы она идеально соответствовала вашим потребностям.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-about-testimonial bg--cover" data-background="assets/images/background/about-testimonial.jpg"
    style="background: url(&quot;assets/images/background/about-testimonial.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 offset-md-6">
                <div class="ps-section__header">
                    <h3 class="ps-heading" style="color: white;">Наша команда</h3>
                    <p class="bg-primary">Команда MySofa — это сплочённый коллектив профессионалов с многолетним опытом в производстве мебели. Мы гордимся тем, что вносим вклад в создание уютных и стильных интерьеров для наших клиентов.</p>
                </div>
                <div class="ps-section__content">
                    <div class="ps-slider--dot-bottom owl-slider owl-carousel owl-theme owl-loaded"
                        data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30"
                        data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1"
                        data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000"
                        data-owl-mousedrag="on">


                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-2925px, 0px, 0px); transition: 1s; width: 4095px;">
                                <div class="owl-item cloned" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 555px; margin-right: 30px;">
                                    <div class="ps-block--testimonial">
                                        <div class="ps-block__header"><img src="http://via.placeholder.com/60x60"
                                                alt="">
                                            <h5>John Doe</h5>
                                            <p>15 October 2017</p>
                                        </div>
                                        <div class="ps-block__content">
                                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra
                                                tempor. Aliquam tincidunt mollis lacus, in condimentum ante
                                                scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-controls">
                            <div class="owl-nav">
                                <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div>
                                <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div>
                            </div>
                            <div class="owl-dots" style="">
                                <div class="owl-dot active"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ps-about-gallery">
    <div class="container">
        <div class="ps-section__header text-center">
            <h3 class="ps-heading">Наши работы</h3>
        </div>
        <div class="ps-slider--dot-bottom owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
            <img src="assets/images/pages/about-gallery.jpg" alt="">
            <img src="assets/images/pages/about-gallery-1.jpg" alt="">
            <img src="assets/images/pages/about-gallery-2.jpg" alt="">
            <img src="assets/images/pages/about-gallery.jpg" alt="">
            <img src="assets/images/pages/about-gallery-1.jpg" alt="">
            <img src="assets/images/pages/about-gallery-2.jpg" alt="">
        </div>
    </div>
</div>
<div class="ps-home8-partner">
    <div class="container">
        <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="false" data-owl-dots="false" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5" data-owl-duration="1000" data-owl-mousedrag="on">
            <img src="assets/images/partner/partner-1.png" alt="">
            <img src="assets/images/partner/partner-2.png" alt="">
            <img src="assets/images/partner/partner-3.png" alt="">
            <img src="assets/images/partner/partner-4.png" alt="">
            <img src="assets/images/partner/partner-5.png" alt="">
            <img src="assets/images/partner/partner-6.png" alt="">
        </div>
    </div>
</div>
@endsection
