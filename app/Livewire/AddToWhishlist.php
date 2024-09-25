<?php

namespace App\Livewire;

use App\Models\whishlist;
use Livewire\Component;

class AddToWhishlist extends Component
{
    public $productid;
    // public $type;
    public $de="";
    public function mount($id){
        $this->productid=$id;
        // $this->type=$type;



    }
    public function addtowhishlist(){
        if(whishlist::where("product_id",$this->productid)->where("user_id",auth()->user()->id)->exists()){
            $this->de="already aded";
        }else{
            whishlist::create([
                "user_id"=>auth()->user()->id,
                "product_id"=>$this->productid,
                "type"=>"product"
            ]);
          
            $this->dispatch("add_to_whish");
            $this->de="added";
        }
        
      
    }
    public function render()
    {
        return view('livewire.add-to-whishlist');
    }
}
