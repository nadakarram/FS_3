<?php

namespace App\Livewire\Dashbourd\Category;

use App\Models\category;
use Livewire\Component;

class DeleteCategory extends Component
{
    public $category;
    public $id;
    public function mount(category $category){
        $this->category=$category;
        $this->id=$category->id;

    }
    public function delete(){
        category::findOrFail($this->id)->delete();
        return redirect("/admincategory");

    }
    public function render()
    {
        $this->delete();
        return view('livewire.dashbourd.category.delete-category');
    }
}
