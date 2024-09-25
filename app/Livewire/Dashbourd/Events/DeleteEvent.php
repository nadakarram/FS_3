<?php

namespace App\Livewire\Dashbourd\Events;

use Livewire\Component;

class DeleteEvent extends Component
{
    public function render()
    {
        return view('livewire.dashbourd.events.delete-event');
    }
}
