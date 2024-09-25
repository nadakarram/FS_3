<?php

namespace App\Livewire\Dashbourd\Offers;

use App\Models\category;
use App\Models\offer;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateOffer extends Component
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

public $id;
#[Validate("required|date")]
         
public $start_data;
#[Validate("nullable|date")]
         
public $end_data;
function mount(offer $offer){
    $this->offer=$offer;
    $this->id=$offer->id;
    $this->name=$offer->name;
    $this->price=$offer->price;
    $this->desc=$offer->desc;
   $this->start_data=$offer->start_data;
   $this->end_data=$offer->end_data;

 
             
             $this->stock=$offer->stock;
         
             
             $this->discount_prcentage=$offer->discount_prcentage;
             $this->category_id=$offer->category_id;
          
 
 
 }
 public function update()  { 
   


 
     
    offer::where('id',$this->id)->
    update(
        [
            "name"=>$this->name,
            "price"=>$this->price,

            
            'desc'=>$this->desc,
            
            
            "stock"  =>$this->stock,
            "start_data"=>$this->start_data,
            "end_data"=>$this->end_data,
           
            
            "discount_prcentage"=>$this->discount_prcentage,
            "category_id"=>$this->category_id
        ]);
    
     
    return redirect("/adminoffer");
    
    // echo "done";
    $this->dispatch("offer-create");
    }
    public function render()
    {
        $categories=category::all();
        return view('livewire.dashbourd.offers.update-offer')->with(["categories"=>$categories]);
    }
}
