<div class="container-fluid  p-4 mt-5" >


      

   
 
        <div class="d-flex">
            <div>
                <a href="/" class="text-decoration-none">Home</a>
                >>
            </div>
            <div>
                <a href="/offers" class="text-decoration-none">Offers</a>
                >>
            </div>
            <div>
                <a href="#" class="text-decoration-none">Details</a>
                >>
            </div>


        </div>
    
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 ">
                    <div class="row justify-content-center align-items-center gap-2">
                        <div class="col-md-3 row justify-content-center align-items-center">
                            <div class="row align-items-center  p-1" style="">
                                <a  wire:click="changeImage({{1}})">  <img id="img1" src="{{asset("storage/".$offer->offer_image1)}}" width="90" height="100"  alt="" ></a>
                            </div>
                            <div class="row p-1">
                                <a  wire:click="changeImage({{2}})"> <img id="img2" src="{{asset("storage/".$offer->offer_image2)}}" width="90" height="100"  alt=""  ></a>
                            </div>
                           
                            
                            

                        </div>
                        <div class="col-md-8 ">
                                <img id="main" src="{{asset("storage/$main_image")}}" class="w-100 h-100">
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="product-details">
                        <span class="badge bg-info text-dark mb-2">Best Seller</span>
                        <h2>{{$offer->name}}</h2>
                        <p class="text-muted">{{$offer->desc}}</p>
                        <h3 class="price">
                            @if ($offer->discount_prcentage!=0)
                                   ${{$offer->price*(1-($offer->discount_prcentage/100))}} <span class="text-decoration-line-through text-muted">${{$offer->price}}</span>
                            @else
                            ${{$offer->price}}
                          @endif 
                        </h3>
                        <p>{{$offer->end_data}}</p>
                    
                        {{$producttype}}
                       {{-- @livewire("cart") --}}
                        <div>
                        <livewire:cart :productId="$id" :producttype='$producttype' />
                       </div> 
                       
                    </div>
                </div>
            
            </div>
        </div>
        {{-- <div class="container-fluid p-4 mb-5">
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

        </div> --}}
        <div class="container mt-5">
            <h2></h2>
            @if ($offer->video_link!=null)

                <div class="row p-0 m-0 w-100 position-relative bg-dark" style="height: 70vh">
                  <img src="{{asset("assets/images/video.png")}}" class="w-100 h-100 p-0">
                  <a href="{{$offer->video_link}}"  class="btn btn-dark position-absolute top-50 ms-5 rounded-0 " style="width: 15%">Watch Video <i class="fas fa-play"></i></a>
            </div> 
            @else
            
            @endif
           
          
        </div>

    
    
     
</div>
