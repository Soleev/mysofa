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
        $message = "📞 <b>Новый заказ с сайта!</b>\n\n";
        $message .= "<b>Телефон:</b> {$phone}\n";
        $message .= "Страница: <a href=\"{$currentUrl}\">{$currentUrl}</a>\n";
        $message .= "Дата: " . now()->format('Y-m-d H:i:s');

        // Отправка сообщения в Telegram
        $this->sendMessageToTelegram($message);

        // Возврат успешного ответа
        return redirect()->back()->with('success', 'Ваш запрос успешно отправлен!');
    }


    protected function sendMessageToTelegram($message, $chatId = null)
    {
        $token = env('TELEGRAM_BOT_TOKEN');
        $chatId = $chatId ?? env('TELEGRAM_GROUP_CHAT_ID'); // Использовать ID группы по умолчанию

        $url = "https://api.telegram.org/bot{$token}/sendMessage";

        $response = Http::post($url, [
            'chat_id' => $chatId,
            'text' => $message,
            'parse_mode' => 'HTML',
        ]);
        // Логирование ответа от Telegram
        \Log::info('Telegram API response', ['response' => $response->body()]);

        if ($response->failed()) {
            throw new \Exception('Не удалось отправить сообщение в Telegram.');
        }
    }


}

