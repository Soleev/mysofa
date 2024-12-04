<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Для работы с помощью Str::slug


class ProductController extends Controller
{
    public function index()
    {
        // Проверка, был ли введён правильный пароль
        if (!session('password_protected')) {
            return redirect()->route('products.password.form');
        }
        // Отображение страницы создания продукта, если проверка пройдена
        $products = Product::all();
        return view('products.index', compact('products'));
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
        $product = Product::create([
            'name' => $request->name,
            'size' => $request->size,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->name), // Генерация slug из name
        ]);

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
