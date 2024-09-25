<?php

namespace App\Livewire\Dashbourd\Admins;

use App\Models\User;
use Livewire\Component;

class Deleteadmin extends Component
{   public $user;
    public $id;
    public function mount(User $user){
        $this->user=$user;
        $this->id=$user->id;

    }
    public function delete(){
        User::findOrFail($this->id)->delete();
        return redirect("/admins");

    }
    public function render()
    {
        $this->delete();
        return view('livewire.dashbourd.admins.deleteadmin');
    }
}
