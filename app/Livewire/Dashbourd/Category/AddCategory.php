<?php

namespace App\Livewire\Dashbourd\Category;

use App\Models\category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddCategory extends Component
{
    #[Validate("required|min:2|string")]
public $name;
public function create()  {
    $this->validate();
    category::create(
        [
            "name"=>$this->name,
           
        ]
       
    );
    $this->reset();
    $this->dispatch("category-create");
}

    public function render()
    {
        return view('livewire.dashbourd.category.add-category');
    }
}
