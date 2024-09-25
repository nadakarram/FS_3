<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout("layouts.nav_footer")]
class ChangePassword extends Component
{
    #[Validate("required")]
    public $old;
    #[Validate("required|min:6|max:10|different:old")]
    public $password;
    #[Validate("required|same:password")]
    public $confirpassword;

    public $massage;
    public $errormassage;
    public $confirmmassage;

    public function changepassword()
    {
        $this->validate();

        $user = User::where("email", auth()->user()->email)->first();

        if (Hash::check($this->old, $user->password)) {

            User::where("email", auth()->user()->email)->update(["password" =>Hash::make($this->password)]);

            $this->massage = "password changed correctly";
        } else {

            $this->errormassage = "the old password does't match with your email";

        }


    }
    public function render()
    {
        return view('livewire.auth.change-password');
    }
}
