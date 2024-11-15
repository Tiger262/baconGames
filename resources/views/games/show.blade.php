 
@extends('layout')
@section('content')
    <h1>{{ $game->name }}</h1>
        <table class="show">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Megjelenési év:
                </th>
                <th>
                    Műfaj:
                </th>
            </tr>
            <tr>
                <td>
                    {{$game->id}}
                </td>
                <td>
                    {{$game->release}}
                </td>
                <td>
                    {{$game->genre->name}}
                </td>
            </tr>
        </table>
        <div class="forms">
            <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Törlés</button>
                <a href="{{ route('games.edit', $game->id) }}" class="btn">
                Módosítás
            </a>
            </form>

        </div>
@endsection 