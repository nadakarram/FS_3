<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout("layouts.app")]
class Regester extends Component
{
    use WithFileUploads;
    #[Validate("required|min:2|string")]
    public $name;
    #[Validate("required|email|unique:users")]
    public $email;
    #[Validate("required|min:6|max:10")]
    public $password;
    #[Validate("required|min:16|integer")]
    public $age;
    #[Validate("required|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;
    #[Validate(["image"])]
    public $image;
    #[Validate("required")]
    public $terms;

    public function regester(){
        $this->validate();
        $user=User::create([
            "name"=>$this->name,
            "age"=>$this->age,
            "phone_number"=>$this->phone_number,
            "email"=>$this->email,
            "password"=>$this->password,
            "address"=>$this->address,
            "image"=>$this->image?->store("uplouds/profile","public"),

        ]);
        $user->assignRole("user");
        redirect()->route("login");

    }
    public function render()
    {
        return view('livewire.auth.regester');
    }
}
