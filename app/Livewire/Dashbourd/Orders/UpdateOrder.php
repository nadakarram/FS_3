<?php

namespace App\Livewire\Dashbourd\Orders;

use App\Models\order;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UpdateOrder extends Component
{
    public $order;
    #[Validate("required")]
    public $state;
    #[Validate("required")]
    public $time_to_recive;
    public $id;
    function mount(order $order){
        $this->order=$order;
        $this->id=$order->id;
        $this->state=$order->state;
        $this->time_to_recive=$order->time_to_recive;
    }
    public function update()  {
        $this->validate();
       
        order::findOrFail($this->id)->update(
            [
                "state"=>$this->state,
                "time_to_recive"=>$this->time_to_recive,
    
            
            ]
           
        );
        
        return redirect("/adminorder");
        
    
        $this->dispatch("order-updated");
    }
    public function render()
    {
        return view('livewire.dashbourd.orders.update-order');
    }
}
