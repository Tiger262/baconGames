@extends('layout')

@section('content')
<h1>Játékok</h1>
<div>
    @include('success')
    <a href="{{ route('games.create') }}" title="Új">Új hozzáadása</a>
	@foreach($games as $game)
        <table>
            <tr>
                <th>#</th>
                <th>Játék neve:</th>
            </tr>
            <div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
            <tr>
                <td>
                    {{$game->id}}
                </td>
                <td>
                    {{$game->name}}
                </td>
            </tr>
        
            </div>
        </table>
	@endforeach
</div>
@endsection