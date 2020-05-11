<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nombre de mi proyecto')</title>

    <style>
        .active  {
            background-color: red;
        }
    </style>
</head>
<body>

    {{ dump(request()->path()) }}
    
    @include('partials.nav')
    @yield('content')
    
</body>
</html>