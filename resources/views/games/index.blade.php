@extends('layout')

@section('content')
<h1>Játékok</h1>
<div>
    @include('success')
    <a href="{{ route('games.create') }}" title="Új hozzáadása" class="new">+</a>
    <table>
        <tr>
            <th>#</th>
            <th>Játék neve:</th>
        </tr>
	    @foreach($games as $game)
            
            <tr>
                <td>
                    {{$game->id}}
                </td>
                <td>
                <a href="{{route('games.show', $game->id)}}">{{$game->name}}</a>
                </td>
            </tr>
            
        @endforeach
    </table>
</div>
@endsection