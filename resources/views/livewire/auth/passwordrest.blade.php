<div class="mt-5">
    <div class="container mt-5 text-center">
     <div class="row justify-content-center">
         <img src="{{asset("assets/images/reset.PNG")}}" width="100" height="150" class="col-3">
         <h2>Change Password</h2>
         <div class=" mx-auto  text-start card card-custom col-md-8 p-5 rounded my-5">
            
          
            
             
          
             <form class="mt-5" wire:submit="resetpassword">
                 
                 <div class="mb-3">
                     <label for="fullName" class="form-label">New Password</label>
                     <input type="password" wire:model="password" class="form-control" id="password">
                     @error('password')
                     <p class="text-danger">{{$message }}</p>
                     
                         
                     @enderror
                 </div>
                 <div class="mb-3">
                     <label for="fullName" class="form-label">Re-enter Password</label>
                     <input type="password" wire:model="passwordcomfirmation" class="form-control" id="passwordcomfirmation">
                     @error('passwordcomfirmation')
                     <p class="text-danger">{{$message }}</p>
                     
                         
                     @enderror
                 
                 </div>
               
                
                 <input type="submit" class="btn btn-purple-outline w-100 mt-2" value="Reset password">
             </form>
         </div>
     </div>
    
    </div>
 </div>
 