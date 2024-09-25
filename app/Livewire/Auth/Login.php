<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout("layouts.app")]
class Login extends Component
{
   
    #[Validate("required|email|")]
    public $email;
    #[Validate("required")]
    public $password;
    public $remmber_me;


    public function login(){
        $this->validate();

        if(auth()->attempt(["email"=>$this->email,"password"=>$this->password],$this->remmber_me)){
            redirect("/");
        };
        // if (User::where("email", $this->email)->exists()) {
        //     $user = User::where("email", $this->email)->first();
        //     if (Hash::check($this->password, $user->password)) {
        //         dd("match");

        //     } else {
        //         dd("deosn't match");
        //     }

        // } else {
        //     dd("email not found");
        // }

    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
