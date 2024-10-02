@extends('layouts.app')
@section('title', 'Товары в гатегории  - MySofa')
@section('description', 'Товары в гатегории.')
@section('content')
    <div class="container">
        <h1>Список товаров</h1>

        @foreach($products as $product)
            <div class="product-item">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>Цена: {{ $product->price }} сум</p>
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
            </div>
        @endforeach
    </div>
@endsection
