@extends('layouts.app')
@section('title', 'Обо мне - MySofa')
@section('description', 'Узнайте больше о создателе MySofa. Моё вдохновение, опыт и страсть к созданию качественной и комфортной мебели. Откройте историю бренда MySofa.')
@section('content')
    <div class="ps-breadcrumb ps-breadcrumb--3">
        <div class="ps-container-fluid">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Обо мне</li>
            </ol>
        </div>
    </div>
    <div class="ps-about-me bg--cover" data-background="assets/images/about-me.jpg">
        <div class="container">
            <div class="ps-about-me__info">
                <h3>Алена</h3>
                <p>Компания мягкой мебели My Sofa, была основана в 2017г., создатель которой милая девушка.
                    За 7 лет существования, команда пополнилась талантливыми сотрудниками, из маленького подмастерья компания выросла в большое стабильное производство.
                </p>
                <p>
                    Наш дружный коллектив стремится удовлетворить запросы потребителей
                    Мы стараемся внедрить современные, стильные фасоны и модели мягкой мебели, отвечаем за качество и своевременное исполнение заказов.
                </p>
            </div>
        </div>
    </div>
@endsection
