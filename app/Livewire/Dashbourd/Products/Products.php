<?php

namespace App\Livewire\Dashbourd\Products;

use App\Models\category;
use App\Models\product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout("layouts.dashbourd")]
class Products extends Component
{
    use WithPagination;
    public $search;
    public $category="All";
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
        $products=product::where("name","like","%{$this->search}%")->paginate(5);
        if($this->filterby==0){
            
            //    dd(!product::where("category_id",$this->filterby)->exists());
                $products=product::where('name','like','%'.$this->search.'%')->paginate(5);
            }else{ 
                $products=product::where('name','like','%'.$this->search.'%')->where("category_id",$this->filterby)->paginate(5);
            }
        $categories=category::all();
        return view('livewire.dashbourd.products.products')->with(['products'=>$products,"categories"=>$categories]);
    }
}
