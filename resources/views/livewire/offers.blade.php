<div>
    {{-- hearder --}}
    <div class="container-fluid  p-4 m-0" style="height:65vh; background-size:cover;background-repeat: no-repeat;background-image: url({{asset("assets/images/oppo.png")}});">
        <div class="row p-lg-5 p-2 justify-content-between align-items-center">
           <div class="col-lg-6 col-12 p-lg-5 p-2 text-left">
               <h1 class="ps-lg-5 p-2 mb-3 " style="font-size: 52px">All offer for your </h1>
               <p  class="ps-lg-5 p-2 mb-3 " style="color: #323743" >Aliquip fugiat ipsum nostrud ex et eu incididunt quis minim dolore excepteur voluptate</p>
               <div class="ps-lg-5 p-2 mb-3" >
                   <a class="btn btn-purple" href="/shop">Shop Now</a>
               </div>
               
   
   
           </div>
           <div class="col-lg-6 col-0">
   
           </div>
   
        </div>
    </div>
    {{-- search and control item --}}
    <div class="container mt-4">
        <div class="row justify-content-between align-items-center mt-5 mb-5">
            <div class="col-md-6 ">
                <ul class="nav nav-pills nav-fill">  
                    <li class="nav-item">
                      <a  wire:click="alloffer" class="nav-link text-purpel @if ($filterby==0)
                     active
                          
                    
                          
                      @endif"  style="@if ($filterby==0)
                      background-color:#6d31ed ;
                         
                 
                  
                         
                     @endif" >All Offers</a>
                    </li>
                    @foreach ($categories as $category )
                         <li class="nav-item">
                      <a wire:click="filterbycategory({{$category->id}})" class="text-purpel nav-link @if ($filterby==$category->id)
                      active
                          
                  
                   
                          
                      @endif"  style="@if ($filterby==$category->id)
                      background-color:#6d31ed ;
                         
                 
                  
                         
                     @endif" >{{$category->name}}</a>
                    </li>
                    @endforeach
                   
                  
                    
                    
                  </ul>

            </div>
            <div class="col-md-5">
                <div class=" row justify-content-between align-items-center ">
                    <div class="col-md-8 mt-2 mb-0 ">
                       
                @livewire("search")
                    </div>
                       
                       
                    <button wire:click="sortdata" class="btn btn-outline-secondary col-md-3  ">Sort by @if ($sort=="ASC")
                        <i class="fas fa-sort-amount-asc "></i>
                    @else
                    <i class="fas fa-sort-amount-desc "></i>
                        
                    @endif</button>
                    
                    
                    
                </div>
                
            </div>
           
            
              

        
        </div>
    </div>
    {{-- product --}}
    <div class="container mb-5 mt-5">
        <div class="row mt-3 justify-content-center" style="height: max-content;">
            @foreach ($offers as $offer )
            <div class="col-md-3 mt-2">
                <div class="card">
                   
                    <a href="/offerdetails/{{$offer->id}}"><img src="{{asset("storage/".$offer->offer_image1)}}" width="259" height="259" class="card-img-top position-relative" alt="offer 1"></a>
                    <div class="position-absolute top-0 left-0"> <span class=" badge bg-purpel mb-2 p-2 rounded-full ">Best-Seller</span></div>
                    <div class="card-body text-left">
                       
                        <h5 class="card-title">{{$offer->name}} {{$offer->id}}</h5>
                        <p class="card-text"><?php echo strlen($offer->desc) > 30 
                            ? substr($offer->desc, 0, 24) . '...' 
                            : $offer->desc; ?></p>
                        <div class="d-flex justify-content-between">
                            <span>
                                @if ($offer->discount_prcentage!=0)
                                ${{$offer->price*(1-($offer->discount_prcentage/100))}} <del>${{$offer->price}}</del>
                         @else
                         ${{$offer->price}}
                       @endif
                            </span>
                            <a href="/offerdetails/{{$offer->id}}" class="btn btn-purple-outline rounded-circle px-2"><i class="fas fa-shopping-cart"></i></a>
                        
                        </div>
                    </div>
                </div>
            
            </div>
                
            @endforeach
            <div class=" mt-4">
               {{-- {{$offers->links()}}   --}}
            </div>
           

        </div>
    </div>
    
   

</div>
