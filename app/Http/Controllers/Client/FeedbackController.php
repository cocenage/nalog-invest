<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Exceptions\HttpResponseException;
use Symfony\Component\HttpFoundation\Response;

class FeedbackController extends Controller
{
    public function create()
    {
        return view('feedback.create');
    }

    public function store(Request $request)
{
    // Валидация входящих данных
    $request->validate([
        'name' => 'required|string|max:255',
        'mail' => 'required|email|max:255',
        'description' => 'required|string',
    ]);

    // Проверяем, когда была последняя отправка
    $lastSubmissionTime = Session::get('last_submission_time');

    // Устанавливаем интервал в 60 секунд
    $timeLimit = 60; // Время в секундах

    if ($lastSubmissionTime && (time() - $lastSubmissionTime < $timeLimit)) {
        // Выбрасываем 429 ошибку
        throw new HttpResponseException(response()->json([
            'message' => 'Слишком много запросов. Пожалуйста, подождите перед следующей отправкой.'
        ], Response::HTTP_TOO_MANY_REQUESTS));
    }

    // Создаем новый отзыв
    Feedback::create($request->all());

    // Обновляем временную метку последней отправки
    Session::put('last_submission_time', time());

    return response()->json(['message' => 'Ваше сообщение успешно отправлено!']);
}
}
