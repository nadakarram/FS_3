
<div>
  
{{-- section one --}}
    <div class="container-fluid  p-5 m-0" style="height:80vh; background-size:cover;background-repeat: no-repeat;background-image: url({{asset("assets/images/bac1.png")}});">
     <div class="row p-lg-5 p-2 justify-content-between align-items-center">
        <div class="col-lg-6 col-12 p-lg-5 p-2 text-left">
            <h1 class="ps-lg-5 p-2 mb-3 " style="font-size: 52px">Gift for your skin</h1>
            <p  class="ps-lg-5 p-2 mb-3 " style="color: #323743" >Aliquip fugiat ipsum nostrud ex et eu incididunt quis minim dolore excepteur voluptate</p>
            <div class="ps-lg-5 p-2 mb-3" >
                <a href="/shop" class="btn btn-purple">Shop Now</a href="/shop">
            </div>
            


        </div>
        <div class="col-lg-6 col-0">

        </div>

     </div>
    </div>
{{-- nav --}}
    <div class="container text-center my-5">
        <h2 class="mb-3">Our Products</h2>
        <div class="d-flex justify-content-center">
            <a href="/" class="btn btn-purple me-2">Best Sellers</a>
            <a href="/shop" class="btn btn-purple-outline">New Products</a>
        </div>
    </div>
{{-- products --}}
    <div class="container">
        <div class="row mt-3">
            
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
                       
                        <h5 class="card-title">{{$product->name}} {{$product->id}}</h5>
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
          
        </div>
    </div>
{{-- events --}}
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="fw-bold">Event promotion</h2>
            {{-- <a href="#" class="text-decoration-none">See all</a> --}}
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{asset("assets/images/Image 57.png")}}" class="card-img-top position-relative" width="544" height="272" alt="Relaxing & Pampering">
                    <div class="position-absolute p-5">
                        <h5 class="card-title fw-bold">Relaxing & Pampering</h5>
                        <p class="card-text">Pariatur ad nisi ex tempor ea.</p>
                        <a href="https://www.paulaschoice.com/expert-advice/skincare-advice" class="btn btn-purple" >Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{asset("assets/images/Image 58.png")}}" class="card-img-top position-relative" width="544" height="272" alt="Smooth & Bright Skin">
                    <div class="position-absolute p-5">
                        <h5 class="card-title fw-bold">Smooth & Bright Skin</h5>
                        <p class="card-text">Pariatur ad nisi ex tempor ea.</p>
                        <a href="https://www.paulaschoice.com/expert-advice/skincare-advice" class="btn btn-purple">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{-- our story --}}
    <div class="container my-5 text-center ">
        <h2 class="fw-bold ">Our Story</h2>
    </div>
    <div class="container-fluid p-0 d-flex justify-content-end align-items-end" style="height: 500px;">
       <img src="{{asset("assets/images/Image 61.png")}}" class="w-100 h-100 position-relative">
        <a href="https://www.youtube.com/watch?v=0_hM45yDsRQ" class="btn btn-dark mb-5 me-2 position-absolute"> watch Video <i class="far fa-youtub"></i></a>
    </div>
    <div class="container my-5">
       
        
        <div class="row mt-4">
            <div class="text-left col-md-4">
                <h2 class="fw-bold">Read what's new</h2>
                <p class="text-muted">Stay updated with our latest offers and trends.</p>
                <a href="https://www.skincenterofsouthmiami.com/2018/06/the-importance-of-facials-and-skin-care/#:~:text=Good%20skin%20care%20is%20important,your%20skin%20looking%20its%20best." class="btn btn-purple-outline">See More</a>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset("assets/images/Image 59.png")}}" class="card-img-top" alt="Article 1">
                    <div class="card-body">
                        <h5 class="card-title">Aenean ut lacus vel arcu commodo</h5>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
            </div>
            <!-- Second Card -->
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset("assets/images/Image 60.png")}}" class="card-img-top" alt="Article 2">
                    <div class="card-body">
                        <h5 class="card-title">Adipiscing elit proin in elit magna</h5>
                        <p class="card-text text-muted">Pellentesque habitant morbi tristique senectus.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Instagram</h2>
            <p>@yourinstagram_official</p>
        </div>
    
        <div class="row g-1">
            <!-- Instagram Images -->
            <div class="col-3">
                <img src="{{asset("assets/images/Image 63.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 1">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 64.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 2">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 65.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 3">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 66.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 4">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 72.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 5">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 70.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 6">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 73.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 7">
            </div>
            <div class="col-3">
                <img src="{{asset("assets/images/Image 67.png")}}" class="img-fluid  w-100 h-100" alt="Instagram 8">
            </div>
        </div>
    </div>
    
    
    


</div>

