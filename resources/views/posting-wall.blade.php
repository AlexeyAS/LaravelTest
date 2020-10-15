@extends('layouts.app')

@section('title-block') Сообщения всех пользователей
@endsection

@section('content')
    <h1 style="text-align: center">Сообщения всех пользователей</h1>

    <form class="search" action="" method="post" >
        <input type="search" class="form-control" placeholder="Введи имя пользователя">
        <button class="btn btn-warning my-2 mx-auto" type="submit">Фильтр по пользователю</button>
    </form>
    <br>
    <form class="search" action="" method="post" >
        <input type="search" class="form-control" placeholder="Введи текст">
        <button class="btn btn-warning my-2 mx-auto" type="submit">Фильтр по содержанию текста</button>
    </form>
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
