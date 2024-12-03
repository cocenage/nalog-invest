<?php

namespace App\Livewire\Contacts;

use App\Models\Contact;
use Livewire\Component;

class ContactsList extends Component
{
    public function render()
    {
        return view('livewire.contacts.contacts-list');
    }
}
