<?php

namespace App\Livewire;

use App\Models\cart;
use App\Models\offer;
use App\Models\order;
use App\Models\order_item;
use App\Models\product;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
#[Layout("layouts.nav_footer")]
class Cartlist extends Component
{
     public $subtotal=0; 
     public $Shipping=10;
     public $discount=0;
     
     #[Validate("required|string|min:2")]
     public $name; 
     #[Validate("required|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;
    public $user;
    public $delivery;
    public $error="";
    public $secuess="";
    public $date;
    
    #[On("updatequantity")]
    function mount(User $user){
        $this->user=User::where("id",auth()->user()->id)->first();
        $this->name=$this->user->name;
        $this->address=$this->user->address;
        $this->phone_number=$this->user->phone_number;


    }
     function updateUserData(){
        // dd("upated");
        User::where("id",auth()->user()->id)->update([
            "name"=>$this->name,
            "phone_number"=>$this->phone_number,
            "address"=>$this->address
        ]);


     }
     public function deliveryoption($date){
        $this->date=$date;
        $this->delivery=$date=="quick" ?date('m-d-Y', strtotime('+2 days')):date('m-d-Y', strtotime('+14 days'));
     
     }
     public function deletefromcart($removedid){
        
       $removed= cart::where("id",$removedid)->first(); 
     
         
    if($removed->type=="offer"){
      
        $offer=offer::where("id",$removed->product_id)->first();
         offer::where("id",$removed->product_id)->update(["stock"=>$offer->stock+$removed->quantity]);
         cart::where("id",$removedid)->delete();  
    }else{  
       
        $pro=product::where("id",$removed->product_id)->first();
        product::where("id",$removed->product_id)->update(["stock"=>$pro->stock+$removed->quantity]);
        cart::where("id",$removedid)->delete();
    }

        // $this->secuess="removed";


     }
    public function makeorder(){
       
        
     
       if(cart::where("user_id",auth()->user()->id)->exists()){
        $cartitems=cart::where("user_id",auth()->user()->id)->get();
        foreach ($cartitems as $cartitem) {

            $this->subtotal+=($cartitem->price*$cartitem->quantity);
        }
// dd($this->subtotal+$this->Shipping)*(1-$this->discount);
        order::create([
            "state"=>"pending",
            "time_to_recive"=>$this->delivery??date('m-d-Y', strtotime('+2 days')),
            "user_id"=>auth()->user()->id,
            "num_order_items"=>cart::where("user_id",auth()->user()->id)->count(),
            "order_total"=>($this->subtotal+$this->Shipping)*(1-$this->discount),
            "created_at"=>now()
        ]);

        $order=order::where("created_at",now())->first();
        
        $cartitems=cart::where("user_id",auth()->user()->id)->get();
       
        foreach ($cartitems as $cartitem) {
            if ($cartitem->type=="offer") {
                order_item::create([
                    "offer_id"=>$cartitem->product_id,
                    "order_id"=>$order->id,
                    "quantity"=>$cartitem->quantity
    
    
                ]);
            }else{
                   order_item::create([
                "product_id"=>$cartitem->product_id,
                "order_id"=>$order->id,
                "quantity"=>$cartitem->quantity


            ]);
            }
         

           
        }
      
         $this->secuess="Product order your order in proccess ";
         $this->subtotal=$this->Shipping;
        $this->dispatch("order_create");
        cart::where("user_id",auth()->user()->id)->delete();
        $this->dispatch("cart_remove_items");

       }else{
       
        $this->error="Add product in cart to make order";

       }
       


    }
    // public $cartquntity;
    public function updatequantity($id,$quantity){
//  dd($quantity);
        cart::where("id",$id)->update([
            "quantity"=>$quantity
        ]);

       
        $this->dispatch("updatequantity");
        // $cartitem=cart::where("id",$id)->first();
        // $this->cartquntity=$cartitem->quantity;
        

    }
    
    // #[On("updatequantity")]

     public function render()
    {
        
      
        $cartitems=cart::where("user_id",auth()->user()->id)->get();
     

      

       
        $products=product::all();
        $offers=offer::all();
       

        return view('livewire.cartlist',["offers"=>$offers,"user"=>$this->user,"cartitems"=>$cartitems,"products"=>$products]);
    }
}
