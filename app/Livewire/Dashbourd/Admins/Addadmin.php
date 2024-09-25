<?php

namespace App\Livewire\Dashbourd\Admins;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Addadmin extends Component
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
    #[Validate("nullable|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;
    #[Validate("required|image")]
    public $image;
 
    // public $terms;
    public function addadmin(){
        // $this->validate();
        // dd();
        $user=User::create([
            "name"=>$this->name,
            "age"=>$this->age,
            "phone_number"=>$this->phone_number,
            "email"=>$this->email,
            "password"=>$this->password,
            "address"=>$this->address?? "no address",
            "image"=>$this->image?->store("uplouds/profile","public"),

        ]);
        $user->assignRole("admin");
        // dd("2");
      $this->reset();
      $this->dispatch("admin-create");
    //   sayed123
    // samey123


    }

        public function render()
    {
        return view('livewire.dashbourd.admins.addadmin');
    }
}
