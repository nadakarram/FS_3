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
       
        <style>
             .custom-file-input {
            display: none; /* Hide the default file input */
        }
        .custom-file-label {
            cursor: pointer; /* Change cursor to pointer */
        }
            .input-group .form-control {
            /* border: none; */
            border-left: none;
            border-color: #6c757d;

            background-color: #fff; /* Background color */
            border-radius: 8px; /* Optional: Round the edges */
        }

        .input-group  {
            /* border: none; */
            border-right: none;
            /* Make the button background transparent */
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #6c757d;
        }

        .input-group .btn i {
            color: #6c757d; /* Icon color */
        }
        .input-group-text{
            /* border: 0
             */
             background-color: #fff;
             border-color: #6c757d;
             /* border-right: none */
        }
        .input-group-text:focus{
            border-color: #6d31ed;
        }
        .input-group-text i{
           color: gray
        }

        /* Additional spacing between input fields */
        .input-group {
            margin-bottom: 10px;
        }
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
        </style>
        @livewireStyles
    </head>
    <body>
    
        <!-- Header -->
        
    
        <!-- Main Content -->
        <main class="container-fluid p-0 ">
            {{ $slot }}
        </main>
    
        <!-- Footer -->
       
        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
    </body>
</html>
