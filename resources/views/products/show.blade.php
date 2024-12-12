@extends('layouts.app')
@section('title', $product->name ." " . $category->name ?? 'Продукт')
@section('description', $category->description ?? "Нет описания")
@section('content')
    <div class="ps-breadcrumb ps-breadcrumb--2">
        <div class="ps-container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                    <ol class="breadcrumb">
                        <li><a href="/">Главная</a></li>
                        <li><a href="/catalog"> Каталог</a></li>
                        <li class="active">
                            <a href="/catalog/{{ $product->category->slug }}">{{ $product->category->name }}:</a>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <ul class="ps-breadcrumb__link">
                        <li><a href="#"><i class="exist-leftarrow"></i></a></li>
                        <li><a href="#"><i class="exist-rightarrow"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="ps-product--detail">
        <div class="ps-container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-product__thumbnail">
                        <div class="ps-product__images-large">
                            @if ($product->images->isNotEmpty())
                                @foreach($product->images as $image)
                                    <div class="item">
                                        <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $product->name }}">
                                        <a class="ps-product__zoom single-image-popup"
                                           href="{{ asset('storage/' . $image->image) }}">
                                            <i class="exist-zoom"></i>
                                        </a>
                                    </div>
                                @endforeach
                            @else
                                <p>Изображение отсутствует</p>
                            @endif
                        </div>

                        <div class="ps-product__nav">
                            @foreach($product->images as $image)
                                <div class="item">
                                    <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $product->name }}">
                                </div>
                            @endforeach
                        </div>
                        <div class="clearfix"></div>
                        {{--<div class="ps-product__video">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=4ZighUyrsRU"><i class="exist-play"></i>Watch Video</a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-product__info">
                        <h1 class="ps-product__title">{{ $product->name }}</h1>
                        <h4 class="ps-product__price">{{ number_format($product->price, 0, ',', ' ') }} сум</h4>
                        <div class="ps-product__rating">
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="1">5</option>
                            </select><span>(оценка покупателей)</span>
                        </div>
                        <div class="ps-product__short-desc">
                            <p>Описание</p>
                        </div>
                        <div class="ps-product__variants">
                            <h5>Цвет</h5>
                            <div class="ps-radio ps-radio--inline black">
                                <input class="form-control" type="radio" id="color-1" name="type-1">
                                <label for="color-1"></label>
                            </div>
                            <div class="ps-radio ps-radio--inline white">
                                <input class="form-control" type="radio" id="color-2" name="type-1">
                                <label for="color-2"></label>
                            </div>
                            <div class="ps-radio ps-radio--inline brown">
                                <input class="form-control" type="radio" id="color-3" name="type-1">
                                <label for="color-3"></label>
                            </div>
                            <div class="ps-radio ps-radio--inline gray">
                                <input class="form-control" type="radio" id="color-4" name="type-1">
                                <label for="color-4"></label>
                            </div>
                            <h5 class="mt-30">Размер</h5>
                            <ul class="ps-product__size">
                                <li><a href="#"><span>д.ш {{ $product->size }} м</span></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__divider"></div>
                        <div class="ps-product__shopping">
                            <div class="form-group form-group--number">
                                <input class="form-control" type="text" value="1"><span class="down">-</span><span
                                    class="up">+</span>
                            </div>
                            <!-- Button trigger modal -->
                            <button type="button" class="ps-btn ps-btn--black" data-toggle="modal"
                                    data-target="#callbackModal">
                                <i class="exist-minicart mr-5"></i>Заказать
                            </button>
                            <!-- Модальное окно -->
                            <div class="modal fade" id="callbackModal" tabindex="-1"
                                 aria-labelledby="callbackModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="callbackModalLabel">Оставьте ваш номер
                                                телефона</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Закрыть"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="callbackForm" method="POST" action="{{ route('save.callback') }}">
                                                @csrf <!-- Защита от CSRF -->
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Номер телефона</label>
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="+998 90 1234567" required>
                                                </div>
                                                <!-- Скрытое поле для текущего URL -->
                                                <input type="hidden" id="currentUrl" name="currentUrl">
                                                <button type="submit" class="btn btn-primary">Отправить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="ps-product__cart-action">
                                <li><a href="#"><i class="exist-heart"></i>В избранное</a></li>
                                <li><a href="#"><i class="exist-compare"></i>Сравнить</a></li>
                            </ul>
                            <p><strong>SKU:</strong>000{{ $product->id }}</p>
                            <p><strong>Категория:</strong><a
                                    href="/catalog/{{ $product->category->slug }}">{{ $product->category->name }}</a>,
                            </p>
                        </div>
                        <div class="ps-product__divider"></div>
                        <p class="ps-product__sharing">Поделиться:
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product__content">
            <div class="ps-container-fluid">
                <ul class="tab-list" role="tablist">
                    <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab"
                                          data-toggle="tab">Описание</a></li>
                    <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Детали</a></li>
                    <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Отзывы</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="tab_01">
                        <div class="ps-content">
                            <p><strong>Duis rutrum, ante id volutpat vehicula, ante enim luctus dolor, id tincidunt mi
                                    augue quis est.</strong></p>
                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt
                                mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et
                                mollis. Sed sit amet eros vel orci porta maximus non commodo mi. Morbi tincidunt dolor
                                elit, a condimentum tortor facilisis sed.</p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_02">
                        <div class="ps-content">
                            <p><strong>Duis rutrum, ante id volutpat vehicula, ante enim luctus dolor, id tincidunt mi
                                    augue quis est.</strong></p>
                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt
                                mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et
                                mollis. Sed sit amet eros vel orci porta maximus non commodo mi. Morbi tincidunt dolor
                                elit, a condimentum tortor facilisis sed.</p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_03">
                        <p class="mb-20">0 отзывов для <strong>{{ $product->name }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ps-subscribe--2 bg--cover">
        <div class="container">
            <form class="ps-form--subscribe-2" action="do_action" method="post">
                <h3 class="ps-heading">Подпишитесь на рассылку новинок от MySofa!</h3>
                <p class="text-left">Дорогие друзья!<br>
                    Хотите первыми узнавать о наших новых коллекциях и специальных предложениях? Подписывайтесь на
                    рассылку MySofa!
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
    <script>
        // Записываем текущий URL в скрытое поле
        document.getElementById('currentUrl').value = window.location.href;
    </script>
@endsection
