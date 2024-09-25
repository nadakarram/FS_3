<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;

class GetEmail extends Component
{
    #[Validate("required|email")]
    public $email;
    public $emailmassage="";
    function getemail(){
 

        $this->validate();      
        //  dd($this->email);
         if(User::where("email",$this->email)->exists()){
            redirect("/changepassword/$this->email");
         }else{
            $this->emailmassage="email not found ";

         }
     
    }
    public function render()
    {
        return view('livewire.auth.get-email');
    }
}
