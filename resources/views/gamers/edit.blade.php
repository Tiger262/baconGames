@extends('layout')
@section('content')
    <div>
        @include('error')
        <form action="{{ route('gamers.update', $gamer->id) }}" method="post">
            @csrf
            @method('PATCH')
            <fieldset>
                <label for="name">Új név:</label>
                <input type="text" id="name" name="name" required value="{{ old('name', $gamer->name) }}">
                <label for="email">Új email:</label>
                <input type="text" id="email" name="email" required value="{{ old('email', $gamer->email) }}">
                <label for="adress">Új lakcím:</label>
                <input type="text" id="adress" name="adress" required value="{{ old('adress', $gamer->adress) }}">
                <label for="gender">Új nem:</label>
                <input type="text" id="gender" name="gender" required value="{{ old('gender', $gamer->gender) }}">
                <label for="occupation">Új állás:</label>
                <input type="text" id="occupation" name="occupation" required value="{{ old('occupation', $gamer->occupation) }}">
            </fieldset>
            <button type="submit">Ment</button>
            <a href="{{ route('gamers.index') }}" class="btn">Mégse</a>
        </form>
    </div>
@endsection