
    <div class="container-fluid" style="height:100vh;">
        <div class=" p-0 m-0 h-100 row  gap-1 justify-content-between  align-items-center align-content-center">
            <div class="col-lg-4 col-0 p-0 "><img src="{{asset("assets/images/Group 6 (1).png")}}" class="" alt="ooop" > </div>
            <div class="col-lg-6 col-12 p-3">
                <div class="card ">
                    <div class="card-body ">
                        <h5 class="card-title text-center mt-3 mb-4">Welcome Back 👋 </h5>
                        <form class="px-5 py-1 " wire:submit="login">
                         
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <input type="email" class="form-control" placeholder="Email" id="email" wire:model="email">
                                @error("email")
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
                           

                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="remmber_me"  wire:model="remmber_me">
                                <label class="form-check-label" for="remmber_me">remmber me</label>
                            </div>
                            <div class=""><a href="/forgetpassword"> Forget Password?</a></div>
                            </div>
                            
                            <button type="submit" class="btn btn-purple w-100 mt-4">
                                {{-- <span wire:loading.delay wire:target='login'>
                                    Loading...
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    
                                </span> --}}
                                <div > Login</div>
                            </button>
                        </form>
                        <hr>
                        <div class="text-center mt-3">
                            <p>Or sign In with</p>
                            <button class="btn btn-outline-danger mr-2"><i class="fab fa-google"></i> Google</button>
                            <button class="btn btn-outline-primary"> <i class="fab fa-microsoft"></i> Microsoft</button>
                        </div>
                        <p class="text-center mt-3 mb-0">Already have an account? <a href="/signup">Sign Up</a></p>
                    </div>
                </div>
            </div>
          
        </div>
    </div>



