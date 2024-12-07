<?php

namespace App\Livewire\Partials;

use App\Models\Contact;
use Livewire\Component;

class Header extends Component
{
    public $contact;
    public function mount()
    {
        $this->contact = Contact::first(); // Предполагаем, что у вас только одна запись
    }
    public function render()
    {
        return view('livewire.partials.header');
    }
}
