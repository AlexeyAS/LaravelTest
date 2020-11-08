@extends('layouts.app')

@section('title-block')
    Обновление Поста
@endsection

@section('content')
<h1>Обновление Поста</h1>

    <form action="{{ route('posting-update-submit', $data->id) }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="subject">Введите тему</label>
            <input type="text" name="subject" placeholder="Тема" id="subject" class="form-control" value="{{$data->subject}}">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" placeholder="Сообщение" id="message" class="form-control">{{$data->message}}
    </textarea>
        </div>
        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection
