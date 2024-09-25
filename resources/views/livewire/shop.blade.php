<div>
    {{-- hearder --}}
    <div class="container-fluid  px-4  py-2m-0" style="height:65vh; background-size:cover;background-repeat: no-repeat;background-image: url({{asset("assets/images/oppo.png")}});">
        <div class="row p-lg-5 p-2 justify-content-between align-items-center">
           <div class="col-lg-6 col-12 p-lg-5 p-2 text-left">
               <h3 class="ps-lg-5 p-2 mb-3 " style="font-size: 50px">All product for your </h3>
               <p  class="ps-lg-5 p-2 mb-3 " style="color: #323743" >Aliquip fugiat ipsum nostrud ex et eu incididunt quis minim dolore excepteur voluptate</p>
               <div class="ps-lg-5 p-2 mb-3" >
                   <button class="btn btn-purple">Shop Now</button>
               </div>
               
   
   
           </div>
           <div class="col-lg-6 col-0">
   
           </div>
   
        </div>
    </div>
    {{-- search and control item --}}
    <div class="container mt-4">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-6 ">
                <ul class="nav nav-pills nav-fill ">  
                    <li class="nav-item">
                        <a wire:click="allproduct"  class="nav-link text-purpel cursor-pointer @if ($filterby == 0) active @endif"
                            style=" @if ($filterby == 0) background-color:#6d31ed; @endif ">
                            All Products
                    </a>
                    </li>
                    @foreach ($categories as $category )
                         <li class="nav-item">
                      <a wire:click="filterbycategory({{$category->id}})" class="nav-link text-purpel  @if ($filterby==$category->id)
                      active
                          
                  
                   
                          
                      @endif" style="@if ($filterby==$category->id)
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
                       
                       
                    <button wire:click="sortdata" class="btn btn-outline-secondary col-md-3  ">Sort by  @if ($sort=="ASC")
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
            @foreach ($products as $product )
            <div class="col-md-3 mt-2">
                <div class="card">
                   
                    <a href="/productdetails/{{$product->id}}"><img src="{{asset("storage/".$product->image1)}}" width="259" height="259" class="card-img-top position-relative" alt="Product 1"></a>
                    <?php
                    // Assume $created_at is a DateTime string from your database (e.g., '2024-09-04 12:34:56')
                    $created_at = $product->created_at; // Replace with your actual value from the database

                    // Convert the $created_at string into a DateTime object
                    $createdDate = new DateTime($created_at);

                    // Get the current date
                    $currentDate = new DateTime();

                    // Calculate the difference between the current date and the created date
                    $interval = $createdDate->diff($currentDate);

                    // Check if the difference is exactly two days
                   
                  
       ?>
                    @if ($product->discount_prcentage!=0)
                          <div class="position-absolute top-0 left-0"> <span class=" badge bg-purpel mb-2 p-2 rounded-full ">
                          
                    in sale
                                
                                                
                    
                                            
                        </span></div>   
                    @elseif ($interval->days <= 19 && $interval->invert == 0) 
                    <div class="position-absolute top-0 left-0"> <span class=" badge bg-purpel mb-2 p-2 rounded-full ">
                          
                       New product
                        
                             
                                             
                 
                                         
                     </span></div>

                    @endif
                    
                  
                    <div class="card-body text-left">
                      
                              <h5 class="card-title">{{$product->name}}</h5>
                         
                        
                       
                      

                        <p class="card-text"><?php echo strlen($product->addations) > 30 
                            ? substr($product->addations, 0, 24) . '...' 
                            : $product->addations; ?></p>
                        <div class="d-flex justify-content-between">
                            <span>
                                @if ($product->discount_prcentage!=0)
                                ${{$product->price*(1-($product->discount_prcentage/100))}} <del>${{$product->price}}</del>
                         @else
                         ${{$product->price}}
                       @endif
                            </span>
                          
                            @auth
                            <livewire:add-to-whishlist :id="$product->id"  />
                       @endauth
                        </div>
                    </div>
                </div>
            
            </div>
                
            @endforeach
            <div class=" mt-4">
               {{-- {{$products->links()}}   --}}
            </div>
           

        </div>
    </div>
    
   

</div>
