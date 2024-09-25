<?php

namespace App\Livewire\Dashbourd\Orders;

use App\Models\offer;
use App\Models\order;
use App\Models\order_item;
use App\Models\product;
use App\Models\User;
use Livewire\Component;

class ShowOrder extends Component
{
    public $id;
    public  $orderdata;
    public $userdata;
    public  $orderitems;
    public  $products;
    
    public function mount(order $order){
        $this->orderdata=$order;
        $this->userdata=User::where("id",$order->user_id)->first();
        $this->orderitems=order_item::where("order_id",$order->id)->get();
        $this->products=product::all();
       


        // dd($this->userdata);



    }

    public function render()
    {
        
        $offers=offer::all();
       
        return view('livewire.dashbourd.orders.show-order',["offers"=>$offers,"orderdata"=>$this->orderdata,
    "userdata"=>$this->userdata,"orderitems"=>$this->orderitems,"products"=>$this->products]);
    }
}
