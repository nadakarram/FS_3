<?php

namespace App\Livewire\Dashbourd\Offers;

use App\Models\category;
use App\Models\offer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout("layouts.dashbourd")]
class Offers extends Component
{
    use WithPagination;
    public $search;
    #[On("search")]
    public function handelsearch(string $search =null){
        $this->search=$search;

    }
    public $filterby=0;
    public $ctaname="All";
    public function filterbycategory($category_id){
        $categories=category::all();
        foreach ($categories as $category) {
            if($category->id==$category_id){
                $this->ctaname=$category->name;
            }
            
        }
        $this->filterby=$category_id;

    }
    public function allproduct(){
        $this->filterby=0;
        

    }
    public function render()
    {
        if($this->filterby==0){
            $offers=offer::where("name","like","%{$this->search}%")->paginate(5);
        }else{
            $offers=offer::where("name","like","%{$this->search}%")->where("category_id",$this->filterby)->paginate(5);
        }
        $categories=category::all();
        return view('livewire.dashbourd.offers.offers')->with(['offers'=>$offers,"categories"=>$categories]);
    }
}
