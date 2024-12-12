<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

// Для работы с помощью Str::slug


class ProductController extends Controller
{
    public function index()
    {
        // Проверка, был ли введён правильный пароль
        if (!session('password_protected')) {
            return redirect()->route('products.password.form');
        }
        $products = Product::with('category')->orderBy('created_at', 'desc')->get();
        $lastProduct = Product::with('category', 'images')->orderBy('updated_at', 'desc')->first();

        // Возвращение представления с продуктами и последним продуктом
        return view('products.index', compact('products', 'lastProduct'));
    }


    // Отображение формы для добавления товара
    public function create()
    {
        // Проверка, был ли введён правильный пароль
        if (!session('password_protected')) {
            return redirect()->route('products.password.form');
        }
        // Отображение страницы создания продукта, если проверка пройдена
        $categories = Category::all(); // Получаем все категории для выбора
        return view('products.create', compact('categories'));
    }

    public function edit($id)
    {
        // Проверка, был ли введён правильный пароль
        if (!session('password_protected')) {
            return redirect()->route('products.password.form');
        }
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        // Валидация данных
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'size' => 'nullable|string|max:255',
            'price' => 'required|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Валидация изображений
        ]);

        // Обновление данных продукта
        $product->update([
            'name' => $validated['name'],
            'category_id' => $validated['category_id'],
            'size' => $validated['size'],
            'price' => $validated['price'],
        ]);

        // Обработка изображений
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('products', 'public');
                $product->images()->create(['image' => $path]);
            }
        }

        // Перенаправление с сообщением об успешном обновлении
        return redirect()->route('products.index')->with('success', 'Продукт успешно обновлён.');
    }
    public function deleteImage($id)
    {
        $image = ProductImage::findOrFail($id); // Найдите изображение по ID
        Storage::disk('public')->delete($image->image); // Удалите файл из хранилища

        $image->delete(); // Удалите запись из базы данных

        return response()->json(['message' => 'Изображение успешно удалено']);
    }

    public function destroy($id)
    {
        // Проверка, был ли введён правильный пароль
        if (!session('password_protected')) {
            return redirect()->route('products.password.form');
        }
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Товар успешно удалён');
    }

    // Сохранение нового товара в базе данных
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:255',
            'size' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        // Создаём продукт с автогенерацией слага
        $data = $request->only(['name', 'size', 'price', 'category_id']); // Получаем только нужные поля из запроса

        // Генерация slug из name
        $slug = Str::slug($data['name']);
        $uniqueSlug = $slug;
        $count = 2;

        // Проверяем уникальность slug
        while (Product::where('slug', $uniqueSlug)->exists()) {
            $uniqueSlug = $slug . '-' . $count++;
        }
        // Добавляем уникальный slug в данные
        $data['slug'] = $uniqueSlug;

        // Создаём продукт
        $product = Product::create($data);

        // Обработка изображений
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $product->images()->create(['image' => $path]);
            }
        }

        // Редирект на страницу списка товаров с сообщением об успехе
        return redirect()->route('products.index')->with('success', 'Товар успешно добавлен.');
    }

    // Метод для отображения товаров категории по slug
    public function showByCategorySlug($slug)
    {
        // Ищем категорию по slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Получаем товары категории, отсортированные по дате добавления (последний добавленный)
        $products = $category->products()->orderBy('created_at', 'desc')->get();

        // Передаем категорию и товары в шаблон
        return view('products.category', compact('category', 'products'));
    }

    public function showProduct($category_slug, $product_slug)
    {
        // Ищем категорию по slug
        $category = Category::where('slug', $category_slug)->firstOrFail();

        // Ищем товар по slug и категории
        $product = Product::where('slug', $product_slug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        // Передаем данные в представление
        return view('products.show', compact('category', 'product'));
    }
}
