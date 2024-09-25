<div class="d-flex justify-content-center align-content-end align-items-end" style="background:linear-gradient(#000,white)">
    <div class="form bg-white p-5 m-5 rounded-4 shadow mt-5" style="">
        <h3 class=" text-center" style="color: #000">Add Offer</h3>
        
        
            <form class="row " wire:submit="create">
            
             
                <div class="col-4 mt-2 form-group ">
                  <label for="inputEmail4" class="form-label ">Offer Name</label>
                  <input type="text" class="form-control" id="name"  wire:model="name">
                  <span class="text-danger">
                    @error('name')
                    {{$message}}
                        
                    @enderror
                  </span>
                </div>
                <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Offer Price</label>
                    <input type="text" class="form-control" id="price"  wire:model="price">
                    <span class="text-danger">
                      @error('price')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>
                  <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Offer Stock</label>
                    <input type="number" class="form-control" id="stock"  wire:model="stock">
                    <span class="text-danger">
                      @error('stock')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
                    
                  <div class="col-md-4 mt-2">
                    <label for="" class="form-label">Offer category </label>
                    <select wire:model="category_id" id="category_id" class="form-select">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach

                    </select>
                   
                  </div>
               
                
                 
                  <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Discount Precentage</label>
                    <input type="number" class="form-control" id="discount_prcentage"  wire:model="discount_prcentage">
                    <span class="text-danger">
                      @error('discount_prcentage')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
                  
                  <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Offer Started at</label>
                    <input type="date" class="form-control" id="start_date"  wire:model="start_date">
                    <span class="text-danger">
                      @error('start_date')
                      {{$message}}
                      ll
                          
                      @enderror
                    </span>
                  </div>
                  <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Offer ended at</label>
                    <input type="date" class="form-control" id="end_data"  wire:model="end_data">
                    <span class="text-danger">
                      @error('end_data')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
              

              
                  <div class="col-12 mt-2">
                    <label for="" class="form-label">Product  Description </label>
                    <textarea type="text" class="form-control" id="desc" wire:model="desc" placeholder="abc@gmail.com" cols="5" rows="5"></textarea>
                    <span class="text-danger">
                      @error('desc')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
               
                <div class="col-md-6 mt-2">
                    <label for="" class="form-label">Offer photo image*1</label>
                    <input type="file" class="form-control"  id="offer_image1" wire:model="offer_image1" accept="image/png  image/jpg">
                    <span class="text-danger">
                      @error('offer_image1')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="" class="form-label">Offer photo image*2</label>
                    <input type="file" class="form-control"  id="offer_image2" wire:model="offer_image2" accept="image/png  image/jpg">
                    <span class="text-danger">
                      @error('offer_image2')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>

                
                
                <div class="col-3 p-0 mt-5">
                  <button type="submit" class="btn btn-outline-dark ">Add Offer</button>
                </div>
               
              </form>

    




    </div>

</div>
