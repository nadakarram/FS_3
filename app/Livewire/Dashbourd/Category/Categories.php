<?php

namespace App\Livewire\Dashbourd\Category;

use App\Models\category;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout("layouts.dashbourd")]
class Categories extends Component
{
    use WithPagination;
    public $search;
    #[On("search")]
    #[On("category-create")]
    #[On("category-updated")]
    public function handelsearch(string $search =null){
        $this->search=$search;

    }

    public function render()
    {
        $categories=category::where("name","like","%{$this->search}%")->paginate(6);
        return view('livewire.dashbourd.category.categories')->with("categories",$categories);
    }
}
