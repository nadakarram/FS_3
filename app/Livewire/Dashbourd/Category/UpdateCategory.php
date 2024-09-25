<?php

namespace App\Livewire\Dashbourd\Category;

use App\Models\category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UpdateCategory extends Component
{
    #[Validate("required|min:2|string")]
public $name;
public $category;
public $id;
function mount(category $category){
    $this->category=$category;
    $this->id=$category->id;
    $this->name=$category->name;
}
public function update()  {
    $this->validate();
   
    category::findOrFail($this->id)->update(
        [
            "name"=>$this->name,
        ]);
            return redirect("/admincategory");
    
         
            $this->dispatch("category-updated");
    }
    public function render()
    {
        return view('livewire.dashbourd.category.update-category');
    }
}
