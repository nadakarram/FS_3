<?php

namespace App\Livewire\Dashbourd\Products;

use App\Models\category;
use App\Models\product;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
// #[Layout("layouts.dashbourd")]
class AddProduct extends Component
{
    use WithFileUploads;
    #[Validate("required|min:2|string")]
    public $name;
    #[Validate("required|min:2|decimal:2")]
    public $price;
    #[Validate("required|min:20|string")]
    public $benefits;
    #[Validate("required|min:30|string")]
    public $ingredient;
    #[Validate("required|min:20|string")]
    public $addations;
    #[Validate("required|min:2|integer")]
    public $stock;
    #[Validate("required|image")]
    public $image1;
    #[Validate("required|image")]

    public $image2;
    #[Validate("required|image")]

    public $image3;
    #[Validate("required|image")]
    public $image4;
    #[Validate("required|decimal:1")]

    public $rate;
    #[Validate("nullable|integer|max:5|min:0")]
    public $discount_prcentage;
    #[Validate("required|integer")]

    public $category_id;
    #[Validate("nullable|url")]
    public $video_link;

    public function create()
    {
        $this->validate();
        product::create(
            [
                "name" => $this->name,
                "price" => $this->price,

                "benefits" => $this->benefits,

                "ingredient" => $this->ingredient,

                'addations' => $this->addations,
                'video_link' => $this->video_link,

                "stock" => $this->stock,

                "image1" => $this->image1->store("uplouds/productimage", "public"),

                "image2" => $this->image2->store("uplouds/productimage", "public"),

                "image3" => $this->image3->store("uplouds/productimage", "public"),

                "image4" => $this->image4->store("uplouds/productimage", "public"),

                "rate" => $this->rate,

                "discount_prcentage" => $this->discount_prcentage??0,
                "category_id" => $this->category_id
            ]

        );
        $this->reset();
        $this->dispatch("product-create");
    }


    public function render()
    {
        $categories = category::all();
        return view('livewire.dashbourd.products.add-product')->with("categories", $categories);

    }
}
