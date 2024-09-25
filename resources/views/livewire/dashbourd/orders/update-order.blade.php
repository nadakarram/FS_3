<div class="d-flex justify-content-center align-content-end align-items-end" style="background:linear-gradient(#000,white)">
    <div class="form bg-white p-5 m-5 rounded-4 shadow mt-5" style="">
        <h3 class=" text-center" style="color: #000">Update Order </h3>
        
        
            <form class="row " wire:submit="update">
            
             
                <div class="col-12 mt-2 form-group ">
                  <label for="inputEmail4" class="form-label ">order state </label>
                  <select class="form-control" id="state"  wire:model="state" >
              
                    <option value="panding">panding </option>
                    <option value="processing">processing </option>
                    <option value="shipped">shipped  </option>
                    <option value="canceled"> canceled </option>
                  </select>
                  
                  <span class="text-danger">
                    @error('state')
                    {{$message}}
                        
                    @enderror
                  </span>
                </div>
                <div class="col-12 mt-2 form-group ">
                    <label for="inputEmail4" class="form-label ">order  time to recive</label>
                    <input type="text" class="form-control" id="time_to_recive"  wire:model="time_to_recive">
                    <span class="text-danger">
                      @error('time_to_recive')
                      {{$message}}
                          
                      @enderror
                    </span>
                </div>

                  <div class="col-5  mt-5">
                  <button type="submit" class="btn btn-outline-dark ">Update order</button>
                </div>
               
              </form>

    




    </div>

</div>