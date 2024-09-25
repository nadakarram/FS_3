<?php

namespace App\Livewire\Dashbourd\Products;

use App\Models\product;
use Livewire\Component;

class DeleteProduct extends Component
{

    public $product;
    public $id;
    public function mount(product $product){
        $this->product=$product;
        $this->id=$product->id;

    }
    public function delete(){
        product::findOrFail($this->id)->delete();
        return redirect("/adminproduct");

    }
    public function render()
    {
        $this->delete();
        return view('livewire.dashbourd.products.delete-product');
    }
}
