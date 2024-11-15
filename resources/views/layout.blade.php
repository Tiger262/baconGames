<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Ga+Maamli&display=swap" rel="stylesheet">
    <title>BACONBACONBACON</title>
</head>
<body>
    <div id="page-container">
        <header>
            <nav>
                <ul class="nav">

                    <a href="{{ route('games.index')}}">
                    <li>
                        Játékok
                    </li>
                    </a>

                    <a href="{{ route('gamers.index')}}">
                    <li>
                        Játékosok
                    </li>
                    </a>

                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        <p>Nacsa Levente, Szabolics András<br>BACONBACONBACONBACONBACONBACONBACONBACONBACON<br>BACONBACONBACONBACONBACONBACONBACONBACONBACON<br>BACONBACONBACONBACONBACONBACONBACONBACONBACON<br>BACONBACONBACONBACONBACONBACONBACONBACONBACON</p>
    </footer>
</body>
</html>