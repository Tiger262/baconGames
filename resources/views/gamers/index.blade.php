@extends('layout')

@section('content')
<h1>Játékosok</h1>
<div>
    @include('success')
    <a href="{{ route('gamers.create') }}" title="Új hozzáadása" class="new">+</a>
    <table>
        <tr>
            <th>#</th>
            <th>Játékos neve:</th>
        </tr>
	    @foreach($gamers as $gamer)
            
            <tr>
                <td>
                    {{$gamer->id}}
                </td>
                <td>
                <a href="{{route('gamers.show', $gamer->id)}}">{{$gamer->name}}</a>
                </td>
            </tr>
            
        @endforeach
    </table>
</div>
@endsection