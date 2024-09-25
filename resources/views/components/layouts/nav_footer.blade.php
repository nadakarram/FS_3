<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
        <link href="{{asset("assets/css/css_style.css")}}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <title>{{ $title ?? 'Page Title' }}</title>
       
        @livewireStyles
    </head>
    <body>
    
        <!-- Header -->
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light py-0 sticky-top">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#"><img src="{{asset("assets/images/logo (2).png")}}" alt="logo"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/offers">Offers</a>
                      </li>
                      <li class="nav-item ">
                        <a class="nav-link " href="/shop" >
                            Shop
                        </a>
                       
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="#"  >Blog</a>
                      </li>
                    </ul>
                    <div class="d-flex  ">
                        @guest
                        
                            <a class="nav-link me-3" href="/login" >
                                Login
                            </a>
                           
                          
                          
                            <a class="nav-link me-3" href="/signup"  >Sign Up</a>
                          
                        @endguest
                      
                      @auth
                        <a href="#" class="btn me-3"><i class="fas fa-shopping-cart me-2"></i> Cart ( 0 )</a >
                        <a href="#" class= "btn me-3"><i class="fas fa-user mx-3"></i>omer</a >
                      @endauth
                       
                    </div>
                  </div>
                </div>
            </nav>
        </header>
    
        <!-- Main Content -->
        <main class="container-fluid p-0 ">
            {{ $slot }}
        </main>
    
        <!-- Footer -->
        <footer class="bg-dark text-light py-5">
            <div class="container">
                <div class="row">
                    <!-- About Section -->
                    <div class="col-md-3">
                        <h5>About</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-light text-decoration-none">Company</a></li>
                            <li><a href="#" class="text-light text-decoration-none">News</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Blog</a></li>
                        </ul>
                    </div>
                    <!-- Help Section -->
                    <div class="col-md-3">
                        <h5>Help</h5>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-light text-decoration-none">Support</a></li>
                            <li><a href="#" class="text-light text-decoration-none">FAQs</a></li>
                            <li><a href="#" class="text-light text-decoration-none">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Contact Section -->
                    <div class="col-md-3">
                        <h5>Contact</h5>
                        <p>Email: info@example.com</p>
                        <p>Phone: +123 456 7890</p>
                    </div>
                    <!-- Subscription Section -->
                    <div class="col-md-3">
                        <h5>Receive new promotions</h5>
                     
                        <!-- Social Media Icons -->
                        <div>
                            <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="text-light me-2"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="text-light"><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    
        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    </body>
</html>
