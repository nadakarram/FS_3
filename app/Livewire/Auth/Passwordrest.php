<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Passwordrest extends Component
{
    #[Validate("required|min:6|max:10")]
    public $password;
    #[Validate("required|same:password")]
    public $passwordcomfirmation;
    public $email;
    public function resetpassword(){
        $this->validate();
        User::where("email",$this->email)->update([
            "password"=>Hash::make($this->password)
        ]);
        return redirect("/completed");



    }
    public function render()
    {
        return view('livewire.auth.passwordrest');
    }
}
