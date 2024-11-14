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
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('games.index') }}">Mégse</a>
        </form>
    </div>
@endsection