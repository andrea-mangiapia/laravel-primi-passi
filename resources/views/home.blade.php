<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Hello World</h1>

        <div>
            <h2>
                Film preferiti di {{ $name }} {{ $lastname }}
            </h2>
        </div>

        <div>
            @foreach($movies as $movie)
                {{ $movie }}@if(!$loop->last), @endif
            @endforeach
        </div>

    </main>
</body>
</html>