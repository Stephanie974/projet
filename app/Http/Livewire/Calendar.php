<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\Event;
use App\Models\Eventtwo;

class Calendar extends Component
{

    public $eventtwo = [];
    public function render()
    {
        $this->eventtwos = json_encode(Eventtwo::all());
        return view('livewire.calendar');
    }
}
