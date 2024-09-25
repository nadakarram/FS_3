<?php

namespace App\Livewire;

use App\Models\review;
use Livewire\Component;

class Starrating extends Component
{
    public $rating = 0; // Default rating
    public $name;
    public $productId;

    public $review_text;
    public $massage="";
    public $role;
    public function mount($name, $initialRating = 0,$productId,$role)
    {
        $this->name = $name;
        $this->rating = $initialRating;
        $this->productId=$productId;
        $this->role=$role;
    }



    public function setRating($rating)
    {
        $this->rating = $rating;
        // dd($this->rating);
    }

    public function addreview(){
       
        // $rating = $request->input('rating');
        // dd($this->review_text,$this->rating,$this->role);
        if (review::where("user_id",auth()->user()->id)->where("product_id",$this->productId)->exists()) {
            $this->massage="you aleardy post areview for this product";
        }else{
            review::create([
                        "user_id"=>auth()->user()->id,
                        "product_id"=>$this->productId,
                        "review_text"=>$this->review_text,
                        "rate"=>$this->rating
                    ]);
                
                
                    return redirect("productdetails/$this->productId");
        }
       
       

        

    }
    public function render()
    {
        return view('livewire.starrating');
    }
}
