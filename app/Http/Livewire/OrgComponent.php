<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrgComponent extends Component
{
    public function render()
    {
        return view('livewire.org')->layout('layouts.base');
    }
}
