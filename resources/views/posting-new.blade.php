@extends('layouts.app')

@section('title-block')
    Новый пост
@endsection

@section('content')
<h1>Новый пост</h1>
<p>Введите новый пост</p>

    <form action="{{ route('posting-form') }}" method="post" >
        @csrf
        <div class="form-group">
            <label for="subject">Введите тему</label>
            <input type="text" name="subject" placeholder="Тема" id="subject" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea type="text" name="message" placeholder="Сообщение" id="message" class="form-control">
    </textarea>
        </div>
        <button type="submit" class="btn btn-success">Ввод</button>
    </form>
@endsection
