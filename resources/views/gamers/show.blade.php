 
@extends('layout')
@section('content')
    <h1>{{ $gamer->name }}</h1>
        <table class="show">
            <tr>
                <th>
                    #
                </th>
                <th>
                    E-mail:
                </th>
                <th>
                    Lakcím:
                </th>
                <th>
                    Nem:
                </th>
                <th>
                    Állás:
                </th>
            </tr>
            <tr>
                <td>
                    {{$gamer->id}}
                </td>
                <td>
                    {{$gamer->email}}
                </td>
                <td>
                    {{$gamer->adress}}
                </td>
                <td>
                    {{$gamer->gender}}
                </td>
                <td>
                    {{$gamer->occupation}}
                </td>
            </tr>
        </table>
        <div class="forms">
            <form action="{{ route('gamers.destroy', $gamer->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Törlés</button>
                <a action="{{ route('gamers.edit', $gamer->id) }}" class="btn">
                    Módosítás
                </a>
            </form>
        </div>
        <table class="show">
            <tr>
                <th>
                    Játék:
                </th>
                <th>
                    Játékos név:
                </th>
                <th>
                    Összes Játszott óra:
                </th>
                <th>
                    Múlt heti játszott óra:
                </th>
                <th>
                    Elért mérföldkövek (%):
                </th>
                <th>
                    Szint:
                </th>
            </tr>
            @foreach ($gamer->games as $game)
            <tr>
                <td>
                    {{$game->game->name}}
                </td>
                <td>
                    {{$game->gamer_tag}}
                </td>
                <td>
                    {{$game->hours_all_time}}
                </td>
                <td>
                    {{$game->hours_last_week}}
                </td>
                <td>
                    {{$game->achivements_percent}}
                </td>
                <td>
                    {{$game->level}}
                </td>
            </tr>
            @endforeach
           

        </table>
@endsection 