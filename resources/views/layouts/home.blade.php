<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'Contact APP'}}</title>
    <link rel="stylesheet" href="/home.css">
</head>
<body>
    @include('components.nav')

    @yield('content')
</body>
</html>