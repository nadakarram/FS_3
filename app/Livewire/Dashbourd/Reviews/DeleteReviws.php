<?php

namespace App\Livewire\Dashbourd\Reviews;

use App\Models\review;
use Livewire\Component;

class DeleteReviws extends Component
{    public $review;
    public $id;
    public function mount($id){
        // $this->review=$review;
        $this->id=$id;

    }
    public function delete(){
        review::findOrFail($this->id)->delete();
        return redirect("/allreviews");

    }
    public function render()
    {
        $this->delete();
        return view('livewire.dashbourd.reviews.delete-reviws');
    }
}
