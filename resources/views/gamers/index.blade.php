@extends('layout')

@section('content')
<h1>Játékok</h1>
<div>
    @include('success')
    <a href="{{ route('games.create') }}" title="Új">Új hozzáadása</a>
	@foreach($games as $game)
		<div class="row {{ $loop->iteration % 2 == 0 ? 'even' : 'odd' }}">
			<div class="col id">{{ $game->id }}</div>
			<div class="col">{{$game->name}}</div>
			<div class="right">
				<div class="col"><a href="{{ route('bodies.show', $game->id) }}"><button><i class="fa fa-binoculars" title="Mutat"></i></button></a></div>
				<div class="col"><a href="{{ route('bodies.edit', $body->id) }}"><button><i class="fa fa-edit edit" title="Módosít"></i></button></a></div>
				<div class="col">
                    <form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="btn-del-fuel"><i class="fa fa-trash-can trash" title="Töröl"></i></button>
                    </form>
					</div>
			</div>
		</div>
	@endforeach
</div>
@endsection