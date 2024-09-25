<?php

namespace App\Livewire\Dashbourd\Orders;

use App\Models\order;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout("layouts.dashbourd")]
class Orders extends Component
{
 
    use WithPagination;
    public $search;
    public $state="All";
    // public $filterby;  
    
    #[On("order_create")]
    #[On("search")]
    // public $search;
    // #[On("search")]
 

    public function handelsearch(string $search =null){
        $users=User::all();
        // foreach($users as $user){
        //     if($user->name==$search){
                // $this->search=$search;
        //     }
        // }
        // dd($this->search);
        // $this->search=$search;
      
        if($search!=null){
            foreach ($users as $user) {
            if ($user->name==$search) {

               $this->search=$user->id;
            }
            # code...
        }
         
        }else{
            $this->search=$search;
        }


    }
    public function handelfilter($orderstate=null){
        $this->state=$orderstate;
    //    dd($orderstate);

    }
    public function render()
    {

        
        $orders=order::where("user_id","like","%{$this->search}%")->paginate(8);
        if($this->state=="pending"){
            $orders=order::where("user_id","like","%{$this->search}%")->where("state","pending")->paginate(8);
        }elseif($this->state=="processing"){
            $orders=order::where("state","like","%{$this->search}%")->where("state","processing")->paginate(8);
        }elseif($this->state=="shipped"){
            $orders=order::where("state","like","%{$this->search}%")->where("state","shipped")->paginate(8);
        }elseif($this->state=="canceled"){
            $orders=order::where("state","like","%{$this->search}%")->where("state","canceled")->paginate(8);
        }
    //    $orders=order::where("id","like","%{$this->search}%")->paginate(8);

       $users=User::get();
        return view('livewire.dashbourd.orders.orders',["orders"=>$orders,"users"=>$users]);
    }
}
