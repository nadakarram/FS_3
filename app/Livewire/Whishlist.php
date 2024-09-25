<?php

namespace App\Livewire;

use App\Models\product;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout("layouts.nav_footer")]
class Whishlist extends Component
{
    public $massage="";
    public function remove($id){
        \App\Models\whishlist::where("product_id",$id)->delete();
        $this->massage="deleted sucess";
        $this->dispatch("removewhishitem");

    }
    public function render()
    {
        $products=product::all();
        $whishlist=\App\Models\whishlist::where("user_id",auth()->user()->id)->get();
        return view('livewire.whishlist',["products"=>$products,"whishlist"=>$whishlist]);
    }
}
