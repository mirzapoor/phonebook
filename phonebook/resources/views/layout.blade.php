<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    {{-- <meta name="csrf-token" content=" csrf_token"> --}}

    <link rel="stylesheet" href="/css/app.css">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

   
    <title> Laravel</title>
    </head>
    <body>
        @yield('contacts')

        {{-- <section class="container">
            @yield('cards')
        </section> --}}
        @yield('content')
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
    </body>
</html>