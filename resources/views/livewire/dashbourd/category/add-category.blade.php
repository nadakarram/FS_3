<div class="d-flex justify-content-center align-content-end align-items-end" style="background:linear-gradient(#000,white)">
    <div class="form bg-white p-5 m-5 rounded-4 shadow mt-5" style="">
        <h3 class=" text-center" style="color: #000">Add Category</h3>
        
        
            <form class="row " wire:submit="create">
            
             
                <div class="col-12 mt-2 form-group ">
                  <label for="inputEmail4" class="form-label ">Category Name</label>
                  <input type="text" class="form-control" id="name"  wire:model="name">
                  <span class="text-danger">
                    @error('name')
                    {{$message}}
                        
                    @enderror
                  </span>
                </div>
                
                
                
                <div class="col-5  mt-5">
                  <button type="submit" class="btn btn-outline-dark ">Add Category</button>
                </div>
               
              </form>

    




    </div>

</div>
