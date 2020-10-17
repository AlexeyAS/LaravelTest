@extends('layouts.app')

@section('title-block') Сообщения всех пользователей
@endsection

@section('content')
    <h1 style="text-align: center">Сообщения всех пользователей</h1>

    <form>
        <div class="form-group">
            <label for="exampleInputEmail">Search by name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Поиск">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail">Search by text</label>
            <input type="text" name="text" class="form-control" id="text" placeholder="Поиск">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>

    @foreach($postings as $posting)
        <div class="alert alert-info">

            <h3>{{ $posting->subject }}</h3>
            <p>{{ $posting->message }}</p>
                <br>
                <small>{{ $posting->created_at}}</small>
                <br>
            <small>{{$posting->name}}</small>
            <br>
            <small>{{$posting->email}}</small>
        </div>
    @endforeach
@endsection
