<div class="container-fluid  p-4 mt-5" >


      

        {{-- nav --}}
 
        <div class="d-flex">
            <div>
                <a href="/" class="text-decoration-none">Home</a>
                >>
            </div>
            <div>
                <a href="/shop" class="text-decoration-none">Shop</a>
                >>
            </div>
            <div>
                <a href="#" class="text-decoration-none">Details</a>
                >>
            </div>


        </div>
        {{-- product details --}}
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="row justify-content-center align-items-center gap-2">
                        <div class="col-md-3 row justify-content-center align-items-center">
                            <div class="row  p-1" style="">
                                <a  wire:click="changeImage({{1}})">  <img id="img1" src="{{asset("storage/".$product->image1)}}" width="90" height="100"  alt="" ></a>
                            </div>
                            <div class="row p-1">
                                <a  wire:click="changeImage({{2}})"> <img id="img2" src="{{asset("storage/".$product->image2)}}" width="90" height="100"  alt=""  ></a>
                            </div>
                            <div class="row  p-1" style="">
                              <a  wire:click="changeImage({{3}})">  <img id="img3" src="{{asset("storage/".$product->image3)}}" width="90" height="100"  alt="" ></a>
                             </div>
                             <div class="row p-1 ">
                                 <a  wire:click="changeImage({{4}})"><img id="img4" src="{{asset("storage/".$product->image4)}}" width="90" height="100"  alt="" ></a>
                             </div>
                            
                            

                        </div>
                        <div class="col-md-8 ">
                                <img id="main" src="{{asset("storage/$main_image")}}" class="w-100 h-100">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="product-details">
                        <span class="badge  background-color:#6d31ed ; mb-2">Best Seller</span>
                        <div class="d-flex justify-content-between">
                         <h2>{{$product->name}} </h2>    
                         {{-- rate --}}

                         <h2>
                            @if (is_int($product->rate))
                                @for ($i = 0; $i < $product->rate; $i++)
                                    <i class="bi bi-star-fill text-warning fs-5"></i>
                                @endfor
                                @for ($i = $product->rate; $i < 5; $i++)
                                    <i class="bi bi-star text-warning fs-5"></i>
                                @endfor
                            @else
                                {{-- Full stars --}}
                                @for ($i = 0; $i < floor($product->rate); $i++)
                                    <i class="bi bi-star-fill text-warning fs-5"></i>
                                @endfor
                                
                                {{-- Half star --}}
                                @if ($product->rate - floor($product->rate) >= 0.5)
                                    <i class="bi bi-star-half text-warning fs-5"></i>
                                    @php $filled = floor($product->rate) + 1; @endphp
                                @else
                                    @php $filled = floor($product->rate); @endphp
                                @endif
                                
                                {{-- Empty stars --}}
                                @for ($i = $filled; $i < 5; $i++)
                                    <i class="bi bi-star text-warning fs-5"></i>
                                @endfor
                            @endif
                        </h2>
                        
                    
                         
                        </div>
                       
                        <p class="text-muted">{{$product->addations}}</p>
                        <h3 class="price">
                            @if ($product->discount_prcentage!=0)
                                   ${{$product->price*(1-($product->discount_prcentage/100))}} <span class="text-decoration-line-through text-muted">${{$product->price}}</span>
                            @else
                            ${{$product->price}}
                          @endif 
                        </h3>
                        {{-- <p>{{$product->benefits}}</p> --}}
                    
                        
                       {{-- @livewire("cart") --}}
                       <div>
                        <livewire:cart :productId="$product->id" />
                       </div>
                       
                    </div>
                </div>
            
            </div>
        </div>
        <hr class="mx-4">
         {{-- some product --}}
         <div class="container my-5">
            <h3>Some Product You might like</h3>
            <div class="row mt-3 justify-content-center" style="height: max-content;">
                @foreach ($products as $productone )
              
                <div class="col-md-3 mt-2">
                    <div class="card">
                       
                        <a href="/productdetails/{{$productone->id}}"><img src="{{asset("storage/".$productone->image1)}}" width="259" height="259" class="card-img-top position-relative" alt="Productone 1"></a>
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
                           
                            <h5 class="card-title">{{$productone->name}} {{$productone->id}}</h5>
                            <p class="card-text"><?php echo strlen($productone->addations) > 30 
                                ? substr($productone->addations, 0, 24) . '...' 
                                : $productone->addations; ?></p>
                            <div class="d-flex justify-content-between">
                                <span>
                                    @if ($productone->discount_prcentage!=0)
                                    ${{$productone->price*(1-($productone->discount_prcentage/100))}} <del>${{$productone->price}}</del>
                             @else
                             ${{$productone->price}}
                           @endif
                                </span>
                                <livewire:add-to-whishlist :id="$product->id"  />
                            </div>
                        </div>
                    </div>
                
                </div>
                    
                @endforeach
               
    
            </div>
        </div>
        <div class="container my-5">
            <hr>
            <h4>Product Review</h4>
            <livewire:productreviws :productId="$id"  />
        </div>
        {{-- desc section --}}
        <div class="container p-4 mb-5">
            <hr>
            <div class="row mt-5 " style="height: max-content" >
                <div class="col-md-6">
                    <h2 class="text-dark">Benfite</h2>
                    <p class="text-secondary">
                        {{$product->benefits}}
                    </p>
                    <h1  class="text-dark"> Ingredient</h1>
                    <p  class="text-secondary">{{$product->ingredient}}</p>
                    <h1  class="text-dark"> Description</h1>
                    <p  class="text-secondary">
                        {{$product->addations}}
                    </p>
                </div>
                <div class="col-md-6 h-100" >
                    <img src="{{asset("storage/".$product->image2)}}" class="w-100 h-100 ">
                </div>
            
            </div>

        </div>
       
        {{-- video section --}}
        <div class="container mt-5">
            <h2></h2>
            @if ($product->video_link!=null)

                <div class="row p-0 m-0 w-100 position-relative bg-dark" style="height: 75vh">
                  <img src="{{asset("assets/images/1144.jpg")}}" class="w-100 h-100 p-0">
                  <a href="{{$product->video_link}}"  class="btn btn-dark position-absolute top-50 ms-5 rounded-0 " style="width: 15%">Watch Video <i class="fas fa-play"></i></a>
            </div> 
            @else
            
            @endif
           
          
        </div>

    
    
     
</div>
