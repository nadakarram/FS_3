<?php

namespace App\Livewire\Dashbourd\Products;

use App\Models\category;
use App\Models\product;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class UpdateProduct extends Component
{
    
use WithFileUploads;
#[Validate("required|min:2|string")]
public $name;
#[Validate("required|min:2|decimal:2")]
public $price;
#[Validate("required|min:20|string")]
public $benefits;
#[Validate("required|min:30|string")]
public $ingredient;
#[Validate("required|min:20|string")]
public $addations;
#[Validate("required|min:2|integer")]
public $stock  ;
#[Validate("nullable")]        
public $image1;
#[Validate("nullable")]
         
public $image2;
#[Validate("nullable")]
         
public $image3;
#[Validate("nullable")]
public $image4;
#[Validate("required|decimal:1")]
         
public $rate;
#[Validate("nullable|integer")]          
public $discount_prcentage;
#[Validate("required|integer")]
         
public $category_id;
#[Validate("nullable|url")]
public $video_link;
public $product;
public $id
;
function mount(product $product){
   $this->product=$product;
   $this->id=$product->id;
   $this->name=$product->name;
   $this->price=$product->price;
   $this->benefits=$product->benefits;
  $this->ingredient=$product->ingredient;
  $this->video_link=$product->video_link;
            
            $this->addations=$product->addations;
            
            $this->stock=$product->stock;
          $this->rate=$product->rate;
            
            $this->discount_prcentage=$product->discount_prcentage;
            $this->category_id=$product->category_id;
         


}
public function update()  {
    $this->validate();
   
    product::findOrFail($this->id)->update(
        [
            "name"=>$this->name,
            "price"=>$this->price,

            "benefits"=>$this->benefits,
            
            "ingredient"=>$this->ingredient,
            
            'addations'=>$this->addations,
            
            "stock"  =>$this->stock,
            "video_link"=>$this->video_link,
            
        
            "rate"=>$this->rate,
            
            "discount_prcentage"=>$this->discount_prcentage,
            "category_id"=>$this->category_id
        ]
       
    );
    
    return redirect("/adminproduct");
    
    // echo "done";
    $this->dispatch("product-updated");
}


    public function render()
    {
        $categories=category::all();
      

        return view('livewire.dashbourd.products.update-product')->with(["categories"=>$categories]);
    }
}
