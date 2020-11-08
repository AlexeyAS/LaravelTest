@extends('layouts.app')

@section('title-block') Сообщения пользователя
@endsection

@section('content')
    <h1>Сообщения пользователя</h1>
    @foreach($data as $element)
        <div class="alert alert-info">
            <p>{{$element->name}}</p>
            <h3>{{ $element->subject }}</h3>
            <p><small>{{ $element->created_at}}</small></p>
            <a href="{{ route('posting-data-one', $element->id) }}"><button class="btn btn-warning">Детали</button></a>
        </div>
    @endforeach
@endsection
