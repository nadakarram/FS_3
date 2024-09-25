<?php

namespace App\Livewire\Dashbourd\Admins;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout("layouts.dashbourd")]
class Admins extends Component
{
    use WithPagination;
    public $search;
    #[On("search")]
    #[On("admin-create")]
    #[On("admin-updated")]
    public function handelsearch(string $search =null){
        $this->search=$search;

    }
    public function render()
    {
       
        $admins=User::whereHas("roles", function($q) {
            $q->where("name", "admin");
        })->where("name","like","%{$this->search}%")->paginate(5);
        return view('livewire.dashbourd.admins.admins',["admins"=>$admins]);
    }
}
