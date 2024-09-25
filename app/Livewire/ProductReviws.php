<?php

namespace App\Livewire;

use App\Models\review;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Request;

class ProductReviws extends Component
{
    use WithPagination;
    public $review_text;
    public $rate;
    public $productId;
    public $rating = 0; // Default rating
    public $name;

    public function mount($productId)
    {
  
        $this->productId=$productId;
    }

  


    
    public function render()
    {
        $productreview=review::where("product_id",$this->productId)->orderBy("created_at","DESC")->paginate(4);
     
        $users=User::all();
        return view('livewire.product-reviws',["productreview"=>$productreview,"users"=>$users]);
    }
}
