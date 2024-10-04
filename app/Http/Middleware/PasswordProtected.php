<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PasswordProtected
{

    public function handle(Request $request, Closure $next)
    {
        // Проверяем, ввёл ли пользователь правильный пароль
        if (!session('password_protected')) {
            return redirect()->route('protected-page.form');
        }

        return $next($request);
    }

}
