<?php

namespace App\Livewire;

use App\Models\cart;
use Livewire\Component;

class Updatequantity extends Component
{
    
    public $cartquntity;
    public $cartitemid;
    public function mount($cartitemid,$quantity)
{

    $this->cartitemid = $cartitemid;
    $this->cartquntity=$quantity;
}
    public function updatequantity(){
        //  dd($this->cartquntity);
                cart::where("id",$this->cartitemid)->update([
                    "quantity"=>$this->cartquntity
                ]);
        
               
                $this->dispatch("updatequantity");
                // $cartitem=cart::where("id",$id)->first();
                // $this->cartquntity=$cartitem->quantity;
                
        
    }
    public function render()
    {
        return view('livewire.updatequantity');
    }
}
