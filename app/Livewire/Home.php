<?php

namespace App\Livewire;

use App\Models\cart;
use App\Models\product;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout("layouts.nav_footer")]
class Home extends Component
{
    use WithPagination;
    public function render()
    {
        $products=product::paginate(4);
     
        return view('livewire.home',[
            "products"=>$products
        ]);
    }
}
