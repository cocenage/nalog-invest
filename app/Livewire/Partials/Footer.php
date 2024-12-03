<?php

namespace App\Livewire\Partials;

use App\Models\Contact;
use Livewire\Component;

class Footer extends Component
{
    public $contact;
    public function mount()
    {


        // Получаем данные о нас
        $this->contact = Contact::first(); // Предполагаем, что у вас только одна запись


    }
    public function render()
    {
        return view('livewire.partials.footer');
    }
}
