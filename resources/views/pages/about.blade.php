@extends('layouts.app')
@section('title', 'О нас - MySofa')
@section('description', 'Узнайте больше о компании MySofa, лидере в производстве и продаже качественной мебели.')
@section('content')
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
                        <p><i class="fa-regular fa-face-grin-stars fa-beat fa-2xl"></i></p>
                        <p>Мы предлагаем мебель по доступным ценам, без ущерба для качества.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Экологичность </h3>
                        <p><i class="fa-brands fa-pagelines fa-flip fa-2xl"></i></p>
                        <p>Мы используем экологически чистые материалы и заботимся об окружающей среде.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Качество</h3>
                        <p><i class="fa-regular fa-star fa-spin fa-spin-reverse fa-2xl"></i></p>
                        <p>Мы используем только проверенные материалы и строго контролируем процесс производства на каждом этапе.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Дизайн</h3>
                        <p><i class="fa-solid fa-pen-nib fa-beat fa-2xl"></i></p>
                        <p>Наши модели мебели созданы с учётом современных тенденций в дизайне интерьера.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Комфорт</h3>
                        <p><i class="fa-solid fa-crown fa-beat-fade fa-2xl"></i></p>
                        <p>Мебель MySofa создаётся с заботой о вашем комфорте и эргономике.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="ps-block--about" data-mh="about" style="height: 271px;">
                        <h3 class="ps-heading">Индивидуальный подход</h3>
                        <p><i class="fa-solid fa-person-circle-check fa-fade fa-2xl"></i></p>
                        <p>Мы предлагаем услуги по разработке мебели на заказ, чтобы она идеально соответствовала вашим потребностям.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ps-section__header text-center ">
    <h3 class="ps-heading">Наша команда</h3>
    <p>Команда MySofa — это сплочённый коллектив профессионалов с многолетним опытом в производстве мебели. Мы гордимся тем, что вносим вклад в создание уютных и стильных интерьеров для наших клиентов.</p>
</div>
<div class="ps-about-testimonial bg--cover" data-background="assets/images/background/about-testimonial.jpg"
    style="background: url(&quot;assets/images/background/about-testimonial.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 offset-md-6">

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
            <img src="assets/images/partner/ardo.png" alt="Ардо">
            <img src="assets/images/partner/aziadrev.png" alt="АзияДрев">
            <img src="assets/images/partner/bibtex.png" alt="Бибтекс">
            <img src="assets/images/partner/premyera.png" alt="Премьера">
            <img src="assets/images/partner/soyuzm.png" alt="СоюзМ">
            <img src="assets/images/partner/evim.png" alt="Эвим">
            <img src="assets/images/partner/arben.png" alt="Arben">


        </div>
    </div>
</div>
@endsection
