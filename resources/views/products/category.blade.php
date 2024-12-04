@extends('layouts.app')
@section('title', $category->name ?? 'Категория')
@section('description', $category->description ?? "Нет описания")
@section('content')
    <main class="ps-main">
        <div class="ps-container-fluid">
            <div class="ps-portfolio masonry-root">
                <div class="ps-breadcrumb ps-breadcrumb--3">
                    <div class="ps-container-fluid">
                        <ol class="breadcrumb">
                            <li><a href="/">Главная</a></li>
                            <li><a href="/catalog">Каталог</a></li>
                            <li></li>
                        </ol>
                    </div>
                </div>
                <div class="ps-filter ps-filter--blog"><h1>Все {{ $category->name }} MySofa</h1></div>
                <div class="masonry-wrapper" data-col-md="3" data-col-sm="2" data-col-xs="1" data-gap="30"
                     data-radio="100%">
                    <div class="ps-masonry">
                        <div class="grid-sizer"></div>
                        @foreach($products as $product)
                            <div class="grid-item">
                                <div class="grid-item__content-wrapper">
                                    <div class="ps-post--portfolio">
                                        <div class="ps-post__thumbnail"><a class="ps-btn ps-post__morelink" href="{{ route('products.show', ['category_slug' => $category->slug, 'product_slug' => $product->slug]) }}">{{ $product->name }} Подробнее</a>
                                            @if ($product->images->isNotEmpty())
                                                <img src="{{ asset('storage/' . $product->images->first()->image) }}" alt="{{ $product->name }}">
                                            @else
                                                <p>Изображение отсутствует</p>
                                            @endif

                                        </div>
                                        <div class="ps-post__content">
                                            <h3>{{ $product->name }}</h3>
                                            <p class="font-italic">Размеры: {{ $product->size }}</p>
                                            <p>Цена: {{ number_format($product->price, 0, '.', ' ') }} сум</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="text-center mt-50"><a class="ps-btn ps-btn--black" href="#">Загрузить еще</a></div>
            </div>
        </div>
    </main>
    <div class="ps-subscribe--2 bg--cover" data-background="images/background/subscribe-2.jpg">
        <div class="container">
            <form class="ps-form--subscribe-2" action="do_action" method="post">
                <h3 class="ps-heading">Подпишитесь на рассылку новинок от MySofa!</h3>
                <p class="text-left">Дорогие друзья!<br>
                    Хотите первыми узнавать о наших новых коллекциях и специальных предложениях? Подписывайтесь на рассылку MySofa!
                    Мы будем присылать вам:<br>
                    Анонсы новых коллекций мебели<br>
                    Специальные акции и скидки<br>
                    Советы по созданию уютного интерьера</p>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Email">
                    <button class="ps-btn">Подписаться</button>
                </div>
            </form>
        </div>
    </div>
@endsection
