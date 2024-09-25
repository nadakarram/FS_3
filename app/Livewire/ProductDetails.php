<?php

namespace App\Livewire;

use App\Models\product;
use App\Models\review;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
#[Layout("layouts.nav_footer")]

class ProductDetails extends Component
{


    public $product;
    public $id;
    public $producttype="product";
    public $main_image; // Default main image

    public function changeImage($i)
    {
        if ($i == 4) {
            $this->main_image = $this->product->image4;
        } elseif ($i == 3) {
            $this->main_image = $this->product->image3;
        } elseif ($i == 2) {
            $this->main_image = $this->product->image2;
        } elseif ($i == 1) {
            $this->main_image = $this->product->image1;
        }


    }
    public function mount($id)
    {
        $this->id=$id;
        
        $this->product = product::where("id",$id)->first();
        // dd($this->product);
        $this->main_image = $this->product->image1;

    }
    #[On("review add")]
    public function render()
    {

        $products=product::limit(4)->orderBy("created_at","DESC")->get();
       

        return view('livewire.product-details', ["product" => $this->product,"products"=>$products]);
    }
}
