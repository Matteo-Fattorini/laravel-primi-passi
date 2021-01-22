<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title> @yield('title') </title>
</head>

<body>
    <div class=container>

        @section('header')
            <ul>
                <li> <a href="/">Home</a> </li>
                <li> <a href="/about">About</a> </li>

            </ul>
        @show

        @section('content')
            <h3>This is the content of @yield('title')</h3>
        @endsection
        @yield('content')

        @section('main')

        @show

    </div>
</body>

</html>
