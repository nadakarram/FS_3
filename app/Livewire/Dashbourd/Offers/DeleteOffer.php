<?php

namespace App\Livewire\Dashbourd\Offers;

use App\Models\offer;
use Livewire\Component;

class DeleteOffer extends Component
{
    public $offer;
    public $id;
    public function mount(offer $offer){
        $this->offer=$offer;
        $this->id=$offer->id;

    }
    public function delete(){
        offer::findOrFail($this->id)->delete();
        return redirect("/adminoffer");

    }
    public function render()
   {   $this->delete()
;  
        return view('livewire.dashbourd.offers.delete-offer');
    }
}
