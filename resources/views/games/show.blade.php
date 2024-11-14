 
@extends('layout')
@section('content')
    <h1>"{{ $body->name }}"</h1>
    <div class="row">
        <div>{{ $body->id }}</div>
        <div>{{$body->name}}</div>
        <form action="{{ route('bodies.destroy', $body->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" name="btn-del-fuel"><i class="fa fa-trash-can trash" title="Töröl"></i></button>
        </form>
    </div>
@endsection 