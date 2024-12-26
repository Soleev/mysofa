<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Валидация данных
        $request->validate([
            'name' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Получение данных
        $name = $request->input('name');
        $phone = $request->input('phone');
        $subject = $request->input('subject');
        $messageText = $request->input('message');

        // Форматирование сообщения для Telegram
        $message = "📩 <b>Новое сообщение с сайта</b>\n\n";
        $message .= "<b>Имя:</b> {$name}\n";
        $message .= "<b>Телефон:</b> {$phone}\n";
        $message .= "<b>Тема:</b> {$subject}\n";
        $message .= "<b>Сообщение:</b>\n{$messageText}\n";

        // Отправка сообщения в Telegram
        $this->sendMessageToTelegram($message);

        // Возврат успешного ответа
        return redirect()->back()->with('success', 'Ваше сообщение успешно отправлено!');
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
