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
