<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Sidebar</title>
    <link rel="stylesheet" href="{{asset("assets/css/sidebar.css")}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
      
      
        .btn-purple{
            background-color: #6d31ed;
            color:white
          }
          .btn-purple:hover{
            background-color: white;
            color: #6d31ed;
            border-color: #6d31ed
          }
          .btn-purple-outline{
            background-color: white;
            color: #6d31ed;
            border-color: #6d31ed
            
          }
          .btn-purple-outline:hover{
            background-color: #6d31ed;
            color:white
            
          }
           .input-group .form-control {
            border-left: none;
            border-color: #6c757d;
            background-color: #fff; /* Background color */
            border-radius: 8px; /* Optional: Round the edges */
        }

        .input-group .btn {
            border: none;
            background-color: transparent; /* Make the button background transparent */
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #6c757d;
        }

        .form-select{
            border-color: #6c757d
        }
        .input-group .btn i {
            color: #6c757d; /* Icon color */
        }
        .input-group-text{
            border-right: none;
            border-color: #6c757d;
            
            background-color: #fff
            
        }
        .input-group-text:focus{
            border-color: #6c757d;
        }
        .input-group-text i{
           color: gray
        }

        /* Additional spacing between input fields */
      
      
    </style>
</head>
<body>
    <div class="container-fluid">
        
        <div class="row">
             <div id="wrapper">
            
        
    
            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav" style="margin-left:0;">
                    <li class="sidebar-brand ps-4 fs-5 text-start">
                        
                      <a id="menu-toggle" style="margin-top:20px" class="text-light toggle cursor-pointer" >SkinCare</a>
                        
                    </li>
                  
                    <li>
                        <a href="/adminproduct"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:5px;"> Products</span> </a>
                    </li>
                    
                    <li>
                        <a href="/admincategory"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:5px;"> category</span> </a>
                    </li>
                    <li>
                        <a href="/adminoffer"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:5px;"> Offers</span> </a>
                    </li>
                    <li>
                        <a href="/adminorder"><i class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:5px;">Orders </span> </a>
                    </li>
                    {{-- @if (Session::has("loginAdminid"))
                    <li>
                        <a href="/servies"> <i class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:5px;"> Servies</span> </a>
                    </li>
                     <li>
                        <a href="/comp"><i class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:5px;">Branches</span>  </a>
                    </li> --}}
                    @haspermission("super_admin")
                    <li>
                      <a href='/admins'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>Admins Section</span> </a>
                    </li> 
                    @endhaspermission
                    <li>
                        <a href='/allreviews'> <i class='fa fa-comment-o' aria-hidden='true'> </i> <span style='margin-left:5px;'>Reviews</span> </a>
                      </li> 
                    
                     {{-- @endif --}}
                    <li>
                        <a href="/"> <i class="bi bi-globe2" aria-hidden="true"> </i> <span style="margin-left:5px;">Website</span>  </a>
                    </li>
                    <li>
                        <a href="/logout"> <i class="bi bi-globe2" aria-hidden="true"> </i> <span style="margin-left:5px;">logout</span>  </a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
    
            <!-- Page Content -->
            <div id="page-content-wrapper bg-warning" class=" p-0 m-0">
                <div class="container-fluid p-0 m-0 ">
                    <div class="row w-100">
                        <div class="col-lg-12 w-100">
                            <main>
                                {{$slot}}
                            </main>
                            
                             
                            
    </a>
         <!-- /#page-content-wrapper -->
     
        <!-- /#wrapper -->
      
        </div>
    </div> 
                </div>
            </div>
             </div>
        </div>
    </div>

<script src="{{asset("asset/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("asset/js/java.js")}}"></script>
<script src="https://kit.fontawesome.com/be6c77b871.js" crossorigin="anonymous"></script>

 <script src="{{asset("assets/js/active.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
