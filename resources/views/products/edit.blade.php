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
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}"
                   required>
        </div>

        <div class="form-group">
            <label for="category">Категория</label>
            <select class="form-control" id="category" name="category_id" required>
                @foreach ($categories as $category)
                    <option
                        value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="size">Размер</label>
            <input type="text" class="form-control" id="size" name="size" required
                   value="{{ old('size', $product->size) }}">
        </div>

        <div class="form-group">
            <label for="price">Цена (в сумах)</label>
            <input type="number" class="form-control" id="price" name="price" required
                   value="{{ old('price', $product->price) }}" required>
        </div>

        <div class="form-group">
            <label for="images">Изображения (можно загрузить несколько)</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
            <div class="mt-2">
                <p>Текущие изображения:</p>
                @foreach ($product->images as $image)
                    <div style="display: inline-block; position: relative; margin: 10px;">
                        <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $product->name }}"
                             class="img-thumbnail" style="max-width: 150px;">
                        <!-- Кнопка удаления -->
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteImage('{{ $image->id }}')">
                            Удалить
                        </button>
                    </div>
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-success">Сохранить изменения</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
<!-- CSRF Token для AJAX-запросов -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<script>
    function deleteImage(imageId) {
        if (confirm('Вы действительно хотите удалить изображение?')) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(`/products/images/${imageId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Content-Type': 'application/json',
                }
            })
                .then(response => {
                    if (response.ok) {
                        location.reload(); // Обновить страницу после успешного удаления
                    } else {
                        alert('Не удалось удалить изображение.');
                    }
                })
                .catch(error => console.error('Ошибка:', error));
        }
    }
</script>

<script src="/assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="/assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
