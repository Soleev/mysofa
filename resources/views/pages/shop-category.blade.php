@extends('layouts.app')
@section('title', 'Каталог мебели | MySofa - Качество и стиль для вашего дома')
@section('description', 'Откройте каталог мебели MySofa. Широкий ассортимент качественной, стильной и комфортной мебели для вашего дома. Найдите идеальные решения для вашего интерьера.')
@section('content')
    <div class="ps-breadcrumb ps-breadcrumb--3">

        <div class="ps-container-fluid">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Каталог</li>
            </ol>
            <h1>Каталог Мебели MySofa: Широкий Выбор для Любого Интерьера</h1>
        </div>
    </div>

    <div class="ps-shop--category">
        <div class="ps-container-fluid">
            <div class="masonry-wrapper" data-col-md="5" data-col-sm="3" data-col-xs="1" data-gap="30" data-radio="4:3">
                <div class="ps-masonry">
                    <div class="grid-sizer"></div>
                    <div class="grid-item large">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom"><a class="ps-collection__morelink"
                                                                  href="#">Диваны</a><img
                                    class="ps-fullwidth" src="assets/images/shop/category-1.jpg" alt="Диваны"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom"><a class="ps-collection__morelink"
                                                                  href="#">Кровати</a><img
                                    class="ps-fullwidth" src="assets/images/shop/category-2.jpg" alt="Кровати"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom"><a class="ps-collection__morelink" href="#">Пуфы</a><img
                                    class="ps-fullwidth" src="assets/images/shop/category-3.jpg" alt="Пуфы"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom"><a class="ps-collection__morelink"
                                                                  href="#">Кушетки</a><img
                                    class="ps-fullwidth" src="assets/images/shop/category-4.jpg" alt="Кушетки"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Мягкие настенные панели</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-5.jpg"
                                     alt="Мягкие настенные панели">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Шумоизоляционные панели мягкие</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-6.jpg"
                                     alt="Шумоизоляционные панели мягкие"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Офисные диваны</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-7.jpg" alt="Офисные диваны">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Кресла</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-12.jpg" alt="Кресла">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item large">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Коллекция 2024</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-11.jpg" alt="Коллекция 2024">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Изголовья кровати</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-13.jpg"
                                     alt="Изголовья кровати">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Мягкие панели декор</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-15.jpg"
                                     alt="Мягкие панели декор">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Банкетки</a><img
                                    class="ps-fullwidth" src="assets/images/shop/category-8.jpg" alt="Банкетки"></div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Матрасы</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-9.jpg" alt="Матрасы">
                            </div>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-collection--bottom">
                                <a class="ps-collection__morelink" href="#">Танкетки</a>
                                <img class="ps-fullwidth" src="assets/images/shop/category-10.jpg" alt="Танкетки">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
