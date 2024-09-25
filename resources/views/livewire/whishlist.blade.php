<div class="container mt-5">
    @if ($massage!="")
   
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{$massage}} 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    
        
    @endif
    <div class="container mb-5 mt-5">
        <div class="row mt-3 justify-content-center" style="height: max-content;">
            @foreach ($whishlist as $whishitem )

            @foreach ($products as $product )
              @if ($product->id==$whishitem->product_id)
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
                    <div class="position-absolute top-0" style="right: 0%"> <span class=" badge  mb-2 p-2 rounded-circle  " wire:click="remove({{$product->id}})" style="background-color: rgba(128, 128, 128, 0.468)">
                          
                        
                        <i class="fas fa-remove text-dark"></i>
                              
                                              
                  
                                          
                      </span></div>
                    {{-- <a wire:click="addtowhishlist" class="btn btn-purple-outline rounded-circle px-2"><i class="fas fa-remove"></i></a> --}}
                    
                  
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
                           <div class="">
                            <a href="/productdetails/{{$product->id}}" class="btn btn-purple-outline rounded-circle px-2"><i class="fas fa-shopping-cart"></i></a>
                         
                           </div>
                        </div>
                    </div>
                </div>
            
            </div>
                
                  
              @endif
            @endforeach
            @endforeach
           
            {{-- <div class=" mt-4">
               {{$products->links()}}  
            </div> --}}
           

        </div>
    </div>
</div>
