<?php

namespace App\Livewire\Comments;

use App\Models\Comment;
use Livewire\Component;

class CommentsList extends Component
{
    public $comments;
    public function render()
    {
        return view('livewire.comments.comments-list');
    }
}
