@extends('layouts.app')

@section('title-block'){{$data->name}}
@endsection

@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alert alert-info">
            <h3>{{$data->subject}}</h3>
            <p>{{$data->message}}</p>
            <p>{{$data->email}}</p>
            <p><small>{{ $data->created_at}}</small></p>
            <a href="{{ route('posting-update', $data->id) }}"><button class="btn btn-warning">Редактировать</button></a>
            <a href="{{ route('posting-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>
@endsection
