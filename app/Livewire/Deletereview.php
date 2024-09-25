<?php

namespace App\Livewire;

use App\Models\review;
use Livewire\Component;

class Deletereview extends Component
{

    public $id;
    public $product_id;
    public function mount($id,$product_id){
        $this->id=$id;
        $this->product_id=$product_id;

    }
    public function deleterev(){
  
        review::where("id",$this->id)->delete();
    return redirect("/productdetails/$this->product_id");
    }
    public function render()
    {
        $this->deleterev();
        return view('livewire.deletereview');
    }
}
