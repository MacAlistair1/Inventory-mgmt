<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Inventory Management') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">
</head>
<body>
    @include('includes.navbar')
    <div class="container">
        <div style="margin-top:1%">
        @include('includes.search')
        </div>
        @yield('content')
            @include('includes.viewsale')
            @include('includes.footer')
    </div>
    
</body>
</html>