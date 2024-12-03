<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PageContacts extends Component
{

    public $contact;
    public function mount()
    {


        // Получаем данные о нас
        $this->contact = Contact::first(); // Предполагаем, что у вас только одна запись

        
    }
    public function render()
    {
        return view('livewire.page-contacts');
    }

    protected $telegramToken;
    protected $chatId;

    public function __construct()
    {
        $this->telegramToken = env('TELEGRAM_BOT_TOKEN'); // Добавьте токен в .env
        $this->chatId = env('TELEGRAM_CHAT_ID'); // Добавьте chat_id в .env
    }

    public function sendMessageToTelegram($message)
    {
        $client = new Client();
        $url = "https://api.telegram.org/bot{$this->telegramToken}/sendMessage";

        $response = $client->post($url, [
            'json' => [
                'chat_id' => $this->chatId,
                'text' => $message,
            ],
        ]);

        return $response;
    }

    public function handleForm(Request $request)
    {
        // Валидация данных формы
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        // Формируем сообщение
        $message = "🆕 Новая обратная связь от клиента\n\n";

        $message .= "👤 Имя: {$validatedData['name']}\n\n";

        $message .= "📞 Телефон: {$validatedData['phone']}\n\n";

        $message .= "✉️ Сообщение:\n";
        $message .= "{$validatedData['message']}\n\n";

        // Отправляем сообщение в Telegram
        $this->sendMessageToTelegram($message);

        // Возвращаем ответ (например, редирект или сообщение об успехе)
        return redirect()->back()->with('success', 'Ваше сообщение отправлено!');
    }
}
