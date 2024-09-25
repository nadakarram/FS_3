<?php

namespace App\Livewire;

use App\Models\category;
use App\Models\offer;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout("layouts.nav_footer")]
class Offers extends Component
{
    use WithPagination;
    public $search;
    public $filterby=0;
    public $sort="ASC";

    public $category_id;
    public $offers;
    #[On("search")]
    public function handelsearch(string $search =null){
        $this->search=$search;

    }
    public function filterbycategory($category_id){
        $this->filterby=$category_id;

    }
    public function alloffer(){
        $this->filterby=0;
        

    }
    public function sortdata(){
        $this->sort=$this->sort=="ASC"?"DESC":"ASC";
    }
    

    

    public function render()
    {
        // $offers=offer::all();
        $categories=category::all();
        if($this->filterby==0){
            // dd("4");
            
            //    dd(!product::where("category_id",$this->filterby)->exists());
                $this->offers=offer::where('name','like','%'.$this->search.'%')->orderBy('price', $this->sort)->get();
            // dd($this->offers);
            }else{ 
                $this->offers=offer::where('name','like','%'.$this->search.'%')->where("category_id",$this->filterby)->orderBy('price', $this->sort)->get();
            }
        return view('livewire.offers',["offers"=>$this->offers,"categories"=>$categories]);
    }
}
