<?php

namespace App\Livewire;

use App\Models\cart;
use App\Models\whishlist;
use Livewire\Attributes\On;
use Livewire\Component;

class Cartcount extends Component
{
     
       public $cartcount;
       public $whishcount;
 
       #[On("cart_add_item")]
       #[On("add_to_whish")]
       #[On("cart_remove_items")]
       #[On("removewhishitem")]
    public function mount(){

     
        if(cart::where("user_id",auth()->user()->id)->exists()||whishlist::where("user_id",auth()->user()->id)->exists()){
        
            $this->cartcount=cart::where("user_id",auth()->user()->id)->count();
            $this->whishcount=whishlist::where("user_id",auth()->user()->id)->count();
            
                   }else{
            $this->cartcount=0;
            $this->whishcount=0;
            
                   } 
    }

    public function render()
    {
       
      
        return view('livewire.cartcount',["cartcount",$this->cartcount,"whishcount"=>$this->whishcount]);
    }
}
