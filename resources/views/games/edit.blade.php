@extends('layout')
@section('content')
    <div>
        @include('error')
        <form action="{{ route('games.update', $game->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Új név:</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $game->name) }}">
                <label for="name">Új megjelenési év:</label>
                <input type="number" id="release" name="release" required value="{{ old('release', $game->release) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('games.index') }}" class="btn">Mégse</a>
        </form>
    </div>
@endsection