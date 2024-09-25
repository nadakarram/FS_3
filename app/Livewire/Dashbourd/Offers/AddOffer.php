<?php

namespace App\Livewire\Dashbourd\Offers;

use App\Models\category;
use App\Models\offer;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddOffer extends Component
{
use WithFileUploads;
#[Validate("required|min:2|string")]
public $name;
#[Validate("required|min:2|decimal:2")]
public $price;

#[Validate("required|min:20|string")]
public $desc;
#[Validate("required|min:2|integer")]
public $stock  ;
#[Validate("required|image")]        
public $offer_image1;
#[Validate("required|image")]
         
public $offer_image2;


#[Validate("nullable|integer")]          
public $discount_prcentage;
#[Validate("required|integer")]
         
public $category_id;
#[Validate("required")]
         
public $start_date;
// #[Validate("nullable|date")]
         
public $end_date;

public function create()  {   
 
 $this->validate();
    offer::create(
        [
            "name"=>$this->name,
            "price"=>$this->price,

            
            'desc'=>$this->desc,
            
            
            "stock"  =>$this->stock,
            "start_data"=>$this->start_date??now(),
            "end_date"=>$this->end_date??"While supplies last",
            "offer_image1"=>$this->offer_image1->store("uplouds/offerimage","public"),
            
            "offer_image2"=>$this->offer_image2->store("uplouds/offerimage","public"),
       
            
            "discount_prcentage"=>$this->discount_prcentage??0,
            "category_id"=>$this->category_id
        ]
       
    );
    $this->reset();
    $this->dispatch("offer-create");
}

    public function render()
    {
        $categories=category::all();
        return view('livewire.dashbourd.offers.add-offer')->with("categories",$categories);
    }
}
