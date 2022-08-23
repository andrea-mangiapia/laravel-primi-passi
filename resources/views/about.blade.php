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
        <h1>About</h1>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque doloremque earum error dolorem fuga rerum unde, incidunt delectus nam dolorum dignissimos, nobis magnam perspiciatis commodi consequatur. Dolor, optio autem?
        </p>
    </main>
</body>
</html>