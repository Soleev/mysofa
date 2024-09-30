@extends('layouts.app')
@section('content')
    @section('title', 'Обо мне - MySofa')
    @section('description', 'Узнайте больше о создателе MySofa. Моё вдохновение, опыт и страсть к созданию качественной и комфортной мебели. Откройте историю бренда MySofa.')

    <div class="ps-about-me bg--cover" data-background="assets/images/about-me.jpg">
    <div class="container">
        <div class="ps-about-me__info">
            <h3>Алена</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed fermentum nibh, vel aliquet massa. Etiam in magna id risus lacinia luctus eget eu est.</p>
            <p>Suspendisse leo sodales varius leo elementum vestibulum a elit at ultrices a mi a praesent enim libero ultrices a amet suscipit.</p>
            <ul class="ps-list--social-2 mt-20">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
