<div class="container">
    <div class="product-card">
        <h1>{{ $product->name }}</h1>
        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="product-image">
        <p class="product-description">{{ $product->description }}</p>
        <p class="product-price">{{ number_format($product->price, 0, ',', ' ') }} сум</p>
        <button class="btn btn-primary">Добавить в корзину</button>
    </div>
</div>
