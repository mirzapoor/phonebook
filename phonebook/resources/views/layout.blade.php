<!DOCTYPE html>
<html lang="fa" dir="rtl">
    <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="/css/app.css">
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

   
    <title> phonebook</title>
    </head>
    <body>
        @yield('contacts')

        @yield('content')
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
    </body>
</html>