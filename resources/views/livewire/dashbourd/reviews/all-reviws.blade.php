
<div class="container-fluid p-0 m-0">
    <h2 class="text-center my-4">
        All Reviews Data 
       
    </h2>
    <div class="container-fluid p-0 mb-3">
        <div class="d-flex  justify-content-between">
            <div class=" d-flex justify-content-between">
                    
                @livewire("search")
            

               <div class="dropdown ms-3">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{$ctaname}}
                </button>
                <ul class="dropdown-menu">

                  <li> <a  class="dropdown-item" wire:click="allproduct">All </a></li>
                  @foreach ($products as $product )
                  <li><a  class="dropdown-item" wire:click="filterbycategory({{$product->id}})">{{$product->name}}</a></li>
                  @endforeach
                 
                </ul>
              </div>
           
          
          
       </div>
       <div class="">
        
        {{-- <a href="/adminaddproduct" class="btn btn-outline-dark">Add review <i class="fas fa-add"></i></a> --}}
    </div>
        </div>
        
    </div>

    
    <table class="table table-hover w-100">
        <thead >
            <tr class="" style="">
          
                <th>User</th>
                <th>Product </th>
                <th>Text</th>
                <th>Rate</th>
           
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($reviews as $review )
           
                 <tr class="">
                    
              
              
                <td>
                    @foreach ($users as $user)
                    @if($user->id==$review->user_id)
                    <img src="{{asset("storage/".$user->image)}}" class=" rounded-pill" height="30" width="30">
                    {{$user->name}}
        
                 
                    @endif
                        
                    @endforeach
                   
               </td>
               <td>
                @foreach ($products as $product)
                @if($product->id==$review->product_id)
                {{-- {{$user->name}} --}}
                <img src="{{asset("storage/".$product->image1)}}" alt="image" height="30" width="30">   {{$product->name}}
                @endif
                    
                @endforeach
               
               </td>
                <td>{{$review->review_text}}</td>
                <td>{{$review->rate}}</td>
                <td>
                  
                    <a wire:navigate href="/deletereviews/{{$review->id}}" class="btn"><i class="fas fa-delete-left"></i></a>

                </td>
            </tr>
            @endforeach
          
           
       
        </tbody>
    </table> 
     <div class="mt-3">
                {{$reviews->links()}}
    </div>

</div>
