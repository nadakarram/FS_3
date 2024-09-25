
    
  

    <div class="container-fluid p-5" style="height:  max-content; background-size:cover;background-repeat: no-repeat;">
        <div class=" p-1 p-lg-3 m-0 h-100 row  gap-1 justify-content-center  align-items-start">
            <div class="col-12 col-lg-6 h-100">
                <div class="card  h-100">
                    <div class="card-body ">
                        <h5 class="card-title text-center mt-3 mb-4">Sign Up Now! 😊</h5>
                        <form class="px-5 py-1 " wire:submit="regester">
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
                                <input type="file" class="form-control"  id="image" wire:model="image" accept="image/png  image/jpg">
                                @error("image")
                                    <div class=" w-100 bg-danger rounded mb-0" style="height: 3px"> </div>
                               
                                <p class="text-danger mb-0">{{$message}} </p>
                                    
                                @enderror
                            </div>

                            
                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input @error("terms")
                                    is-invalid
                                @enderror " id="terms"  wire:model="terms">
                                <label class="form-check-label" for="terms">I agree with Terms & Conditions</label>
                            </div>
                           
                            <button type="submit" class="btn btn-purple w-100 mt-4">
                                <span wire:loading wire:target='regester'>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Loading...
                                </span>
                                <div wire:loading.delay.remove wire:target='regester'> Sign Up</div>

                               </button>
                        </form>
                        <hr>
                        <div class="text-center mt-3">
                            <p>Or sign up with</p>
                            <button class="btn btn-outline-danger mr-2"><i class="fab fa-google"></i> Google</button>
                            <button class="btn btn-outline-primary"> <i class="fab fa-microsoft"></i> Microsoft</button>
                        </div>
                        <p class="text-center mt-3 mb-0">Already have an account? <a href="/login">Sign in</a></p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-0 col-lg-5"></div> --}}
        </div>
    </div>


