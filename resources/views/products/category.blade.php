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
                            <li class="active">{{ $category->name }}</li>
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
                                        <div class="ps-post__thumbnail"><a class="ps-btn ps-post__morelink" href="#">Подробнее</a>
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
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
                <div class="text-center mt-50"><a class="ps-btn ps-btn--black" href="#">Load more</a></div>
            </div>
        </div>
    </main>
    <div class="ps-subscribe--2 bg--cover" data-background="images/background/subscribe-2.jpg">
        <div class="container">
            <form class="ps-form--subscribe-2" action="do_action" method="post">
                <h3 class="ps-heading">Get 15% Off Your Next Order</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed fermentum nibh,
                    <br> vel aliquet massa. Etiam in magna id risus lacinia luctus eget eu est.</p>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your Email Address">
                    <button class="ps-btn">Sign up now</button>
                </div>
            </form>
        </div>
    </div>
@endsection
