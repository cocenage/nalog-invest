<?php

namespace App\Livewire\Partners;

use App\Models\Partner;
use Livewire\Component;

class PartnersList extends Component
{
    public function render()
    {
        $partners = Partner::all();

        return view('livewire.partners.partners-list', [
            'partners' => $partners,
        ]);




    }
}
