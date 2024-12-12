<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class CallbackController extends Controller
{
    public function store(Request $request)
    {
        // Валидация данных
        $request->validate([
            'phone' => 'required|string|max:20',
            'currentUrl' => 'required|url',
        ]);

        // Получение данных
        $phone = $request->input('phone');
        $currentUrl = $request->input('currentUrl');

        // Форматирование сообщения
        $message = "📞 <b>Новый заказ клиента, перезвоните:</b>\n\n";
        $message .= "Телефон: <code>{$phone}</code>\n";
        $message .= "URL страницы: <a href=\"{$currentUrl}\">{$currentUrl}</a>\n";
        $message .= "Дата: " . now()->format('Y-m-d H:i:s');

        // Отправка сообщения в Telegram
        $this->sendMessageToTelegram($message);

        // Возврат успешного ответа
        return redirect()->back()->with('success', 'Ваш запрос успешно отправлен!');
    }


    public function sendMessageToTelegram($message)
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_CHAT_ID');

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $response = Http::post($url, [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML', // Используйте HTML для форматирования текста
        ]);

        if ($response->failed()) {
            throw new \Exception('Не удалось отправить сообщение в Telegram.');
        }
    }

}

