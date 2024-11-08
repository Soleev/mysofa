<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
        ]);

        // Получаем данные из формы
        $data = $request->all();

        // Обработка изображения, если оно было загружено
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('products', 'public');
        }

        // Сохранение товара в базе данных
        Product::create($data);

        // Редирект на страницу списка товаров с сообщением об успехе
        return redirect()->route('products.index')->with('success', 'Товар успешно добавлен.');
    }

    // Метод для отображения товаров категории по slug
    public function showByCategorySlug($slug)
    {
        // Ищем категорию по slug
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = $category->products; // Получаем товары категории

        // Передаём категорию и товары в шаблон
        return view('products.category', compact('category', 'products'));
    }

}
