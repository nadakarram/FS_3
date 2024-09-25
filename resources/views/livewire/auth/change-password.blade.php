<div class="mt-5">
   <div class="container mt-5 text-center">
    <div class="row justify-content-center">
        <img src="{{asset("assets/images/change.PNG")}}" width="100" height="150" class="col-3">
        <h2>Change Password</h2>
        <div class=" mx-auto  text-start card card-custom col-md-8 p-5 rounded my-5">
            @if ($massage!="")
                   <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{$massage}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
         
           
            
         
            <form class="mt-5" wire:submit="changepassword">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Old Password</label>
                    <input type="password" wire:model="old" class="form-control" id="old">
                    @error('old')
                    <p class="text-danger">{{$message }}</p>

                    
                        
                    @enderror
                    @if ($errormassage!=null)
                    {{-- {{$errormassage}} --}}
                    <p class="text-danger">    {{$errormassage}}</p>
                        
                    @endif
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">New Password</label>
                    <input type="password" wire:model="password" class="form-control" id="password">
                    @error('password')
                    <p class="text-danger">{{$message }}</p>
                    
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="fullName" class="form-label">Re-enter Password</label>
                    <input type="password" wire:model="confirpassword" class="form-control" id="confirpassword">
                    @error('confirpassword')
                    <p class="text-danger">{{$message }}</p>
                    
                        
                    @enderror
                    @if ($confirmmassage)
                    <p class="text-danger">{{$confirmmassage }}</p>
                    @endif
                </div>
              
               
                <input type="submit" class="btn btn-purple-outline w-100 mt-2" value="change password">
            </form>
        </div>
    </div>
   
   </div>
</div>
