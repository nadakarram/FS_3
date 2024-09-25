<div class="mt-5">
    <div class="container mt-5 text-center">
     <div class="row justify-content-center">
         <img src="{{asset("assets/images/reset.PNG")}}" width="100" height="150" class="col-3">
         <h2>Forget Password</h2>

            
             
          <div class=" w-50 p-3 pb-5 mt-5 shadow ">
              <form class="mt-5 text-start" wire:submit="getemail">
              
                 <div class="mb-3">
                     <label for="email text-purpel" class="form-label">Your Email</label>
                     <input type="email" wire:model="email" class="form-control rounded-pill" id="email">
                     @error('email')
                     <p class="text-danger">{{$message }}</p>
 
                     
                         
                     @enderror
                     @if ($emailmassage!="")
                     <p class="text-danger">{{$emailmassage}}</p>
                         
                     @endif
                    
                 </div>
               
               
                
                 <input type="submit" class="btn btn-purple w-25 float-end mt-5" value="Next">
             </form>
          </div>
           
         </div>
     </div>
    
    </div>
 </div>
 