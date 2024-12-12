<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/favicon.png">
    <link href="{{ asset('/assets/plugins/fontawesome-free-6.6.0-web/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/assets/plugins/bootstrap/dist/css/bootstrap.min.css">
    <title>Исправить продукт</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Исправить продукт</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Название продукта</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
        </div>

        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="size">Размер</label>
            <input type="text" class="form-control" id="size" name="size" value="{{ old('size', $product->size) }}">
        </div>

        <div class="form-group">
            <label for="price">Цена (в сумах)</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="form-group">
            <label for="images">Изображения (можно загрузить несколько)</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
            <div class="mt-2">
                <p>Текущие изображения:</p>
                @foreach ($product->images as $image)
                    <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $product->name }}" class="img-thumbnail" style="max-width: 150px;">
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-success">Сохранить изменения</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>

<script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
