<?php

namespace App\Livewire\Document;

use App\Models\Document;
use Livewire\Component;

class DocumentList extends Component
{
    public function render()
    {
        $documents = Document::all();
        return view('livewire.document.document-list', compact('documents'));
    }
}

