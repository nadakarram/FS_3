
<div class="container-fluid p-0 m-0">
    <h2 class="text-center my-4">
        All Product Data 
       
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
                  @foreach ($categories as $category )
                  <li><a  class="dropdown-item" wire:click="filterbycategory({{$category->id}})">{{$category->name}}</a></li>
                  @endforeach
                 
                </ul>
              </div>
           
          
          
       </div>
       <div class="">
        
        <a href="/adminaddproduct" class="btn btn-outline-dark">Add product <i class="fas fa-add"></i></a>
    </div>
        </div>
        
    </div>

    
    <table class="table table-hover w-100">
        <thead >
            <tr class="" style="">
                <th>PRODUCT</th>
                <th>NAME</th>
                <th>PRICE</th>
                <th>CATEGORY</th>
                <th>INVENTORY</th>
                <th>RATE</th>
                
                <th>Action</th>
            </tr>
        </thead>
        <tbody >
            @foreach ($products as $product )
           
                 <tr class="">
                    {{-- {{asset("storage/".$post->image)}} --}}
              
                <td><img src="{{asset("storage/".$product->image1)}}" alt="image" height="50" width="50"></td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>
                    @foreach ($categories as $category)
                    @if($category->id==$product->category_id)
                     {{$category->name}}
                    @endif
                        
                    @endforeach
                   
               </td>
                <td>{{$product->stock}}</td>
                <td>{{$product->rate}}</td>
                <td>
                    <a wire:navigate href="/adminupdateproduct/{{$product->id}}" class="btn"><i class="fas fa-edit"></i></a>
                    <a wire:navigate href="/delete/{{$product->id}}" class="btn"><i class="fas fa-delete-left"></i></a>

                </td>
            </tr>
            @endforeach
          
           
       
        </tbody>
    </table> 
     <div class="mt-3">
                {{$products->links()}}
    </div>

</div>
