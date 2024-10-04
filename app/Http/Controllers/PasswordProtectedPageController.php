<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordProtectedPageController extends Controller
{
    private $password = '123'; // Установите свой пароль здесь

// Отображение формы для ввода пароля
    public function showForm()
    {
        return view('products.password');
    }

// Проверка пароля
    public function checkPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string',
        ]);
// Проверяем пароль
        if ($request->password === $this->password) {
            // Сохраняем в сессии информацию о том, что пользователь ввел правильный пароль
            session(['password_protected' => true]);
            return redirect()->route('products.index');
        }
// Если пароль неверный, возвращаем обратно с ошибкой
        return back()->withErrors(['password' => 'Неверный пароль']);
    }

// Отображение защищённой страницы

    public function showContent(Request $request)
    {
        // Проверка сессии на наличие правильного пароля
        if (!session('password_protected')) {
            return redirect()->route('products.password.form');
        }

        return view('products.create');
    }
    public function logout(Request $request)
    {
        // Удаление флага доступа по паролю из сессии
        $request->session()->forget('password_protected');

        // Перенаправление на страницу ввода пароля или любую другую
        return redirect()->route('products.password.form');
    }

}
