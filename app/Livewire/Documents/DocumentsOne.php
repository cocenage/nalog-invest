<?php

namespace App\Livewire\Documents;

use App\Models\Document;
use Livewire\Component;

class DocumentsOne extends Component
{
    public $limit = 1;
    public function render()
    {
        $documents = Document::limit($this->limit)->get();
        return view('livewire.documents.documents-one', [
            'documents' => $documents,
        ]);
    }
}
