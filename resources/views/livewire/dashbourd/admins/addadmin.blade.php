
<div class="d-flex justify-content-center align-content-end align-items-end" style="background:linear-gradient(#000,white)">
    <div class="form bg-white p-5 m-5 rounded-4 shadow mt-5" style="">
        <h3 class=" text-center" style="color: #000">Add Admin</h3>
        
        
        <form class="px-5 py-1 " wire:submit="addadmin">
            <div class="input-group ">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
                <input type="text" class="form-control  border-right-0" placeholder="Name"  id="name" wire:model="name">
             
                @error("name")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" placeholder="Email" id="email" wire:model="email">
                @error("email")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                <input type="tel" class="form-control" placeholder="Phone Number" id="phone_number" wire:model="phone_number">
                @error("phone_number")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password" id="password" wire:model="password">
                @error("password")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                <input type="number" class="form-control" placeholder="Age" id="age" wire:model="age">
                @error("age")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-home"></i></span>
                <input type="text" class="form-control" placeholder="address" id="address" wire:model="address">
                @error("address")
                <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
            <div class="input-group">
                <span class="input-group-text">image</span>
                <input type="file" class="form-control"  id="image" wire:model="image" >
                @error("image")
                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
               
                <p class="text-danger mb-0">{{$message}} </p>
                    
                @enderror
            </div>
        
            
          
           
            <button type="submit" class="btn btn-purple w-100 mt-4">
                <span wire:loading wire:target='regester'>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Loading...
                </span>
                <div wire:loading.delay.remove wire:target='regester'> Add admin</div>
        
               </button>
        </form>

    




    
            </div>

</div>
