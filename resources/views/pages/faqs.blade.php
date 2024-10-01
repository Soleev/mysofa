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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet velit et mi posuere blandit?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Vestibulum posuere, velit nec posuere ullamcorper, lorem nisl interdum enim, at fringilla massa lectus efficitur quam?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Morbi sollicitudin velit mauris, posuere ultrices lorem molestie sit amet?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                </div>
            </div>
            <div class="ps-accordion">
                <div class="ps-accordion__header">
                    <p>Duis quis quam quis risus vulputate dictum vitae in dui. Praesent quis commodo lacus?</p>
                </div>
                <div class="ps-accordion__content">
                    <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et mollis.</p>
                </div>
            </div>
        </div>
    </main>
@endsection
