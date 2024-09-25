<?php

namespace App\Livewire;

use App\Models\offer;
use App\Models\product;

use App\Models\whishlist;
use Livewire\Component;

class Cart extends Component
{
public $cartquntity=1;
public $productId;
public $producttype;
public $product;
public $offer;

public $massage;

public function mount($productId)
{

    $this->productId = $productId;
}
public function addtocart()  {
//   dd("1");
   

    

   if($this->producttype=="offer"){
   
    $this->offer=offer::findOrFail($this->productId)->first();
    // dd($this->offer->stock);
    if($this->offer->stock>$this->cartquntity){
        if(\App\Models\cart::where("user_id",auth()->user()->id)->where("product_id",$this->productId)->exists()){
            $this->massage="product aleardy exist";
        }else{
            \App\Models\cart::create(
                [
                    "product_id"=>$this->productId,
                    "user_id"=>auth()->user()->id,
                    "quantity"=>$this->cartquntity,
                    "price"=>$this->offer->price,
                    "type"=>$this->producttype
        
                ]
            );
          
            $this->dispatch("cart_add_item");
            $this->massage="offer add";

        }
       
       
        offer::where("id",$this->productId)->update([
            "stock"=>$this->offer->stock-$this->cartquntity,
        ]);
        
    }else{
       
        $this->massage="product quantity does,'t match with stock";
        $this->cartquntity=10;
       
    }
   }else{
    $this->product=product::findOrFail($this->productId)->first();
  
    // dd($this->producttype);
    if($this->product->stock>$this->cartquntity){
        if(\App\Models\cart::where("user_id",auth()->user()->id)->where("product_id",$this->productId)->exists()){
            $this->massage="product aleardy exist";
        }else{
            \App\Models\cart::create(
                [
                    "product_id"=>$this->productId,
                    "user_id"=>auth()->user()->id,
                    "quantity"=>$this->cartquntity,
                    "price"=>$this->product->price,
                    "type"=>"product"
        
                ]
            );
            $this->dispatch("cart_add_item");
            $this->massage="product add";

        }
       
       
        product::findOrFail($this->productId)->update([
            "stock"=>$this->product->stock-$this->cartquntity,
        ]);
        
    }else{
       
        $this->massage="product quantity does,'t match with stock";
        $this->cartquntity=10;
       
    }
  
   }
    
  
    
    
}
public function incrementCart(){
    if ($this->producttype=="offer") {
        $this->product=offer::findOrFail($this->productId)->first();
        if($this->product->stock>$this->cartquntity){
          $this->cartquntity++;  
        }else{
            $this->massage= "Product stock doesn'/t have this quantity";
        }
    }else{
        $this->product=product::findOrFail($this->productId)->first();
        if($this->product->stock>$this->cartquntity){
          $this->cartquntity++;  
        }else{
            $this->massage= "Product stock doesn'/t have this quantity";
        }

    }
   
    
}

public function decrementCart(){
    
    if($this->cartquntity==1){
        
        $this->cartquntity=1;
    }else{
      $this->cartquntity--;  
    }
    
}
public function addtowhishlist(){
    if(whishlist::where("product_id",$this->productId)->exists()){
        $this->massage="already aded";
    }else{
        whishlist::create([
            "user_id"=>auth()->user()->id,
            "product_id"=>$this->productId,
            "type"=>"product"
        ]);
        $this->massage="added";

    }
  
}

    public function render()
    {
        return view('livewire.cart');
    }
}
