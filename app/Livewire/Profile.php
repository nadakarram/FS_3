<?php

namespace App\Livewire;

use App\Models\offer;
use App\Models\order;
use App\Models\order_item;
use App\Models\product;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout("layouts.nav_footer")]
class Profile extends Component
{
    public function cancelorder($orderid){
        order::where("id",$orderid)->delete();
        order_item::where("order_id",$orderid)->delete();

      
       


        // dd($this->userdata);



    }


    public function render()
    {
        $user=User::where("id",auth()->user()->id)->first();
        $orders=order::where("user_id",auth()->user()->id)->get();
        $products=product::all();
        $offers=offer::all();
        $orderitems=order_item::all();
        return view('livewire.profile',["offers"=>$offers,"orderitems"=>$orderitems,"userdata"=>$user,"orders"=>$orders,"products"=>$products]);
    }
}
