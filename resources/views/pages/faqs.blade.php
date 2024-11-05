@extends('layouts.app')
@section('title', 'Вопросы и ответы - MySofa')
@section('description', 'Ответы на часто задаваемые вопросы о продуктах и услугах MySofa. Узнайте больше о доставке, возврате, сроках изготовления мебели и других важных аспектах.')
@section('content')
<div class="ps-hero bg--cover" data-background="assets/images/hero/hero-faq.jpg">
        <div class="container">
            <h2 class="ps-hero__heading">FAQs</h2>
            <div class="ps-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li class="active">Вопросы-ответы</li>
                </ol>
            </div>
        </div>
    </div>
    <main class="ps-main">
        <div class="container">
            <div class="ps-accordion active">
                <div class="ps-accordion__header">
                    <p>Что такое MySofa?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>MySofa — это магазин мебели и декора, предлагающий широкий ассортимент товаров для создания уюта и комфорта в вашем доме.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Где находится ваш магазин?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Вы можете посетить нас по адресу: Сайрам 7 тупик, дом 50, Ташкент Узбекистан. Также мы предлагаем удобную доставку по городу.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Как связаться с вами?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Вы можете связаться с нами через телеграм или позвонив по номеру +998 99 8870955 . Мы также доступны в социальных сетях.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Какие виды мебели вы предлагаете?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Мы предлагаем диваны, кресла, стулья, столы, кровати и многое другое. Вы можете ознакомиться с нашим полным каталогом на странице
                    <a href="/catalog">Каталог</a>.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Можно ли заказать мебель по индивидуальным размерам?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Да, мы принимаем заказы на мебель по индивидуальным размерам. Для получения подробной информации свяжитесь с нами через форму обратной связи или позвоните.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
