<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Main;
use Livewire\Component;

class PageHome extends Component
{
    public $comment;
    public $about;
    public $specifics;
    public $image;
    public function mount()
    {
        // Получаем данные о нас
        $this->about = Main::first(); // Предполагаем, что у вас только одна запись

        if ($this->about) { // Изменено с $about на $this->about
            $this->specifics = $this->about->specifics; // Получаем массив из первого Repeater
            $this->image = $this->about->image; // Получаем путь к изображению
        } else {
            // Если данных нет, можно инициализировать переменные пустыми массивами
            $this->specifics = [];
            $this->image = null; // Инициализируем переменную для изображения
        }
    }
    public function render()
    {
        $this->comment = Comment::first(); // Предполагаем, что у вас только одна запис
        return view('livewire.page-home');
    }
}
