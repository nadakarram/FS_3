<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
#[Layout("layouts.nav_footer")]
class ProfileEdting extends Component
{ 
    use WithFileUploads;
    #[Validate("required|min:2|string")]
    public $name;
    #[Validate("required|email")]
    public $email;

    #[Validate("required|min:16|integer")]
    public $age;
    #[Validate("required|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;

    #[Validate(["image"])]
    public $edtedimage;
    public $image;

    public $user;
    public $massage="";
    function mount(User $user){
        $this->user=User::where("id",auth()->user()->id)->first();
        $this->name=$this->user->name;
        $this->address=$this->user->address;
        $this->phone_number=$this->user->phone_number;
        
        $this->age=$this->user->age;
        $this->email=$this->user->email;
        $this->image=$this->user->image;


    }
    function changeimage(){
        $this->validateOnly($this->edtedimage);
        User::where("id",auth()->user()->id)->update([
            "image"=>$this->edtedimage?->store("uplouds/profile","public"),]);
            $this->massage="image change correctly";
    }
     function updateUserData(){
        $this->validate();
        // dd("upated");
        User::where("id",auth()->user()->id)->update([
            "name"=>$this->name,
            "age"=>$this->age,
            "phone_number"=>$this->phone_number,
            "email"=>$this->email,
          
            "address"=>$this->address,
            // "image"=>$this->edtedimage?->store("uplouds/profile","public"),
        ]);
      $this->massage="change correctly";

     }
    public function render()
    {
        return view('livewire.profile-edting');
    }
}
