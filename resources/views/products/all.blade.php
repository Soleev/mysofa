@extends('layouts.app')
@section('title', $category->name ?? 'Категория')
@section('description', $category->description ?? "Нет описания")
@section('content')
<main class="ps-main">
    <div class="ps-container-fluid">
        <div class="ps-shop">
            <div class="row">
                @foreach($products as $product)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
                        <div class="ps-product--1" data-mh="product-item">
                                <div class="ps-product__thumbnail">
                                    <img src="{{ asset('storage/' . $product->images->first()->image) }}" alt="{{ $product->name }}">
                                    <a class="ps-btn ps-product__shopping" href="#">
                                        <i class="exist-minicart"></i>Add to cart
                                    </a>
                                    <ul class="ps-product__actions">
                                        <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                                        <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                                        <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View">
                                                <i class="exist-quickview"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ps-product__content">
                                    <a class="ps-product__title" href="#</a>
                                    <span class="ps-product__price">Цена: {{ number_format($product->price, 0, '.', ' ') }} сум</span>
                                </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="ps-shop__morelink text-center mt-30"><a class="ps-btn ps-btn--black" href="#">Load more</a>
            </div>
        </div>
    </div>
</main>
<div class="ps-subscribe--2 bg--cover">
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
