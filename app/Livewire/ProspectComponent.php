<?php

namespace App\Livewire;

use Livewire\Component;

class ProspectComponent extends Component
{
    public $message;
    public function render()
    {
        return view('livewire.prospect-component');
    }
}
