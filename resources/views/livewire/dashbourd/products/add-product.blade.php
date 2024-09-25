<div class="d-flex justify-content-center align-content-end align-items-end" style="background:linear-gradient(#000,white)">
    <div class="form bg-white p-5 m-5 rounded-4 shadow mt-5" style="">
        <h3 class=" text-center" style="color: #000">Add Product</h3>
        
        
            <form class="row " wire:submit="create">
            
             
                <div class="col-4 mt-2 form-group ">
                  <label for="inputEmail4" class="form-label ">Product Name</label>
                  <input type="text" class="form-control" id="name"  wire:model="name">
                  <span class="text-danger">
                    @error('name')
                    {{$message}}
                        
                    @enderror
                  </span>
                </div>
                <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Product Price</label>
                    <input type="text" class="form-control" id="price"  wire:model="price">
                    <span class="text-danger">
                      @error('price')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>
                  <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Product Stock</label>
                    <input type="number" class="form-control" id="stock"  wire:model="stock">
                    <span class="text-danger">
                      @error('stock')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
                    
                  <div class="col-md-4 mt-2">
                    <label for="" class="form-label">category </label>
                    <select wire:model="category_id" id="category_id" class="form-select">
                      @foreach ($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach

                    </select>
                   
                  </div>
               
                
                  <div class="col-4 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">Product Rate</label>
                    <input type="text" class="form-control" id="rate"  wire:model="rate">
                    <span class="text-danger">
                      @error('rate')
                      {{$message}}
                          
                      @enderror
                    </span>
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
                  <div class="col-12 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">video link</label>
                    <input type="url" class="form-control" id="video_link"  wire:model="video_link">
                    <span class="text-danger">
                      @error('video_link')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
              

                <div class="col-12 mt-2">
                  <label for="" class="form-label">Product Benefite </label>
                  <textarea type="text" class="form-control" id="benefits" wire:model="benefits" placeholder="abc@gmail.com" cols="5" rows="5"></textarea>
                  <span class="text-danger">
                    @error('benefits')
                    {{$message}}
                        
                    @enderror
                  </span>
                </div>
                <div class="col-12 mt-2">
                    <label for="" class="form-label">Product Ingredient </label>
                    <textarea type="text" class="form-control" id="ingredient" wire:model="ingredient" placeholder="abc@gmail.com" cols="5" rows="5"></textarea>
                    <span class="text-danger">
                      @error('ingredient')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
                  <div class="col-12 mt-2">
                    <label for="" class="form-label">Product  Addations </label>
                    <textarea type="text" class="form-control" id="addations" wire:model="addations" placeholder="abc@gmail.com" cols="5" rows="5"></textarea>
                    <span class="text-danger">
                      @error('addations')
                      {{$message}}
                          
                      @enderror
                    </span>
                  </div>
               
                <div class="col-md-6 mt-2">
                    <label for="" class="form-label">product photo image*1</label>
                    <input type="file" class="form-control"  id="image1" wire:model="image1" accept="image/png  image/jpg">
                    <span class="text-danger">
                      @error('image1')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="" class="form-label">product photo image*2</label>
                    <input type="file" class="form-control"  id="image2" wire:model="image2" accept="image/png  image/jpg">
                    <span class="text-danger">
                      @error('image2')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="" class="form-label">product photo image*3</label>
                    <input type="file" class="form-control"  id="image3" wire:model="image3" accept="image/png  image/jpg">
                    <span class="text-danger">
                      @error('image3')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>

                <div class="col-md-6 mt-2">
                    <label for="" class="form-label">product photo image*4</label>
                    <input type="file" class="form-control"  id="image4" wire:model="image4" accept="image/png  image/jpg">
                    <span class="text-danger">
                      @error('image4')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>
                
                
                
                <div class="col-3 p-0 mt-5">
                  <button type="submit" class="btn btn-outline-dark ">Add Product</button>
                </div>
               
              </form>

    




    </div>

</div>
