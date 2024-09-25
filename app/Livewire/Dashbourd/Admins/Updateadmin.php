<?php

namespace App\Livewire\Dashbourd\Admins;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Updateadmin extends Component
{
    use WithFileUploads;
    #[Validate("required|min:2|string")]
    public $name;
    #[Validate("required|email")]
    public $email;
    #[Validate("required|min:6|max:10")]
    public $newpassword;
    #[Validate("required|min:16|integer")]
    public $age;
    #[Validate("required|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;
    
    
    public $image;
    #[Validate("image")]
    public $edtedimage;
 
    public $user;
    public $massage="";
   
    function mount(User $user){
        $this->user=$user;
        $this->name=$this->user->name;
        $this->address=$this->user->address;
        $this->phone_number=$this->user->phone_number;
        
        $this->age=$this->user->age;
        $this->email=$this->user->email;
        $this->image=$this->user->image;
        // $this->password=$this->user->password;
      


    }
    function changeimage(){
        $this->validateOnly($this->edtedimage);
        // dd("1");
       $this->user->update([
            "image"=>$this->edtedimage?->store("uplouds/profile","public"),]);
            $this->massage="image change correctly";
            $this->dispatch("admin-updated");
    }
     function updateUserData(){
        // $this->validate();
        // dd(Hash::make($this->newpassword));
        $this->user->update([
            "name"=>$this->name,
            "age"=>$this->age,
            "phone_number"=>$this->phone_number,
            "email"=>$this->email,
          
            "address"=>$this->address,
            "password"=>Hash::make($this->newpassword)
            // "image"=>$this->edtedimage?->store("uplouds/profile","public"),
        ]);
      $this->massage="change correctly";

      $this->dispatch("admin-updated");

      return redirect("/admins");
     }
    public function render()
    {
        return view('livewire.dashbourd.admins.updateadmin');
    }
}
