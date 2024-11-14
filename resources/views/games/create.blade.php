@extends('layout')
@section('content')
<h1>Új játék</h1>
<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
	<!-- ide íratjuk ki a validációs hibákat -->
    @include('error')

    <form action="{{route('games.store')}}" method="post">
        @csrf
        <fieldset>
            <label for="name">Neve:</label>
            <input type="text" id="name" name="name">
        </fieldset>
        <button type="submit">Ment</button>
        <a href="{{ route('games.index') }}">Mégse</a>
    </form>
</div>
@endsection