<?php

namespace App\Livewire;

use App\Models\About;
use Livewire\Component;

class PageAbout extends Component
{

    public $about;
    public $specifics;
    public $statistics;
    public $image;

    public function mount()
    {
       

        // Получаем данные о нас
        $this->about = About::first(); // Предполагаем, что у вас только одна запись

        if ($this->about) { // Изменено с $about на $this->about
            $this->specifics = $this->about->specifics; // Получаем массив из первого Repeater
            $this->statistics = $this->about->statistics; // Получаем массив из третьего Repeater
            $this->image = $this->about->image; // Получаем путь к изображению
        } else {
            // Если данных нет, можно инициализировать переменные пустыми массивами
            $this->specifics = [];
            $this->statistics = [];
            $this->image = null; // Инициализируем переменную для изображения
        }
    }
    public function render()
    {
        return view('livewire.page-about');
    }
}
