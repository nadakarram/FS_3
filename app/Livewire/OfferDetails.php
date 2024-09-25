<?php

namespace App\Livewire;

use App\Models\offer;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout("layouts.nav_footer")]
class OfferDetails extends Component
{
    public $offer;
    public $main_image; // Default main image
public $id;
public $producttype="offer";
    public function changeImage($i)
    {
       if ($i == 2) {
            $this->main_image = $this->offer->offer_image2;
        } elseif ($i == 1) {
            $this->main_image = $this->offer->offer_image1;
        }


    }
    public function mount($id)
    {
        $this->id-$id;
        
        $this->offer = offer::where("id",$id)->first();
        // dd($this->offer);
        $this->main_image = $this->offer->offer_image1;

    }
    public function render()
    {
        return view('livewire.offer-details',["offer"=>$this->offer]);
    }
}
