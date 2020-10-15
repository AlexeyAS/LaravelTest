@extends('layouts.app')

@section('title-block') Сообщения всех пользователей
@endsection

@section('content')
    <h1 style="text-align: center">Сообщения всех пользователей</h1>
    <a style="display: block; text-align: center;" href="#">
        <button class="btn btn-warning my-2 mx-auto">Фильтр по пользователю</button>
    </a>
    <br>
    <a style="display: block; text-align: center;" href="#">
        <button class="btn btn-warning my-2 mx-auto">Фильтр по содержанию текста</button>
    </a>
    <br>

    @foreach($data as $element)
        <div class="alert alert-info">

            <h3>{{ $element->subject }}</h3>
            <p>{{ $element->message }}</p>
                <br>
                <small>{{ $element->created_at}}</small>
                <br>
            <small>{{$element->name}}</small>
            <br>
            <small>{{$element->email}}</small>
        </div>
    @endforeach
@endsection
