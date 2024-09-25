<div>

<div class="d-flex justify-content-end">
      {{-- {{$productId}} --}}
    <!-- Button trigger modal -->
<button type="button" class="btn btn-purple" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Review
</button>
  
  <!-- Modal -->
  <div class="modal fade  modal-dialog-scrollable  modal-lg" id="exampleModal"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-0" >
          <h5 class="modal-title" id="exampleModalLabel"><img src="{{asset("assets/images/logo (2).png")}}" alt=""></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        
            @livewire('starrating', ["role"=>'add','name' => 'rating', 'initialRating' => 0,"productId"=>$productId])
           
        
        </div>
       
      </div>
    </div>
  </div>
    {{-- display reviews --}}
</div>
<div class="row">
  @foreach ($productreview as $review )
  <div class="col-6">
    <div class="card testimonial-card">
      <div class="d-flex justify-content-end">
        @if ($review->user_id==auth()->user()->id)
        
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal2">
          <i class="fas fa-edit"></i>
      </button>
        
        <!-- Modal -->
        <div class="modal fade  modal-dialog-scrollable  modal-lg" id="exampleModal2"  aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header border-0" >
                <h5 class="modal-title" id="exampleModalLabel"><img src="{{asset("assets/images/logo (2).png")}}" alt=""></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              
                  @livewire('updatereview', ["role"=>'update','name' => 'rating', 'initialRating' => $review->rate,'review_text'=>$review->review_text,"productId"=>$review->product_id])
                 
              
              </div>
             
            </div>
          </div>
        </div>
        <a href="/deletetisreviews/{{$review->id}}/{{$review->product_id}}" class="btn"><i class="fas fa-trash-alt"></i></a>
        @endif

      </div>
      
      <div class="card-body d-flex align-items-center">
      
        @foreach ($users as $user )
        @if ($user->id==$review->user_id)
        
          <img src="{{asset("storage/".$user->image)}}" alt="User Photo" class="rounded-circle user-img">
          <div class="testimonial-content ms-3">
            <h5 class="card-title">{{$user->name}}</h5>
          @endif
          
        @endforeach
          
         
              <div class="rating">
                @for ($i=0;$i<$review->rate;$i++)
                <i class="fas fa-star text-warning"></i>
                  
                @endfor
                @if (5-$review->rate!=0)
                @for ($i=0;$i<5-$review->rate;$i++)
                <i class="bi bi-star text-warning"></i>
                  
                @endfor
                {{-- <i class="fas fa-star text-secondary"></i> --}}
                @else

                  
                @endif
                  
              </div>
              <p class="card-text">{{$review->review_text}}</p>
          </div>
      </div>
  </div>
  
  </div>
    
  @endforeach
  {{$productreview->links()}}
  
 
</div>
  </div>
