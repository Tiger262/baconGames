<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BACONBACONBACON</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="{{ route('games.index')}}">Játékok</a>
                </li>
                <li>
                    <a href="{{ route('gamers.index')}}">Játékosok</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>BACONBACONBACON; Nacsa Levente, Szabolics András</p>
    </footer>
</body>
</html>