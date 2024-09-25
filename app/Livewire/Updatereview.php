<?php

namespace App\Livewire;

use App\Models\review;
use Livewire\Component;

class Updatereview extends Component
{
    public $rating = 0; // Default rating
    public $name;
    public $productId;

    public $review_text;
    public $massage="";
    public $role;
    public function mount($name, $initialRating = 0,$productId,$role,$review_text)
    {
        $this->name = $name;
        $this->rating = $initialRating;
        $this->productId=$productId;
        $this->role=$role;
        $this->review_text=$review_text;
    }



    public function setRating($rating)
    {
        $this->rating = $rating;
        // dd($this->rating);
    }

    public function updatereview(){
       
        // $rating = $request->input('rating');
        // dd($this->review_text,$this->rating,$this->role);
       
             review::where("user_id",auth()->user()->id)->update([
            
            "review_text"=>$this->review_text,
            "rate"=>$this->rating
        ]);
     
       
        return redirect("/productdetails/$this->productId");

        

    }
    public function render()
    {
        return view('livewire.updatereview');
    }
}
