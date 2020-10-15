@extends('layouts.app')

@section('title-block')
    Список пользователей
@endsection

@section('content')

<table class="table table-striped table-dark">
    <thead>
    <tr>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Кол-во Постов</th>
        <th scope="col">Последний Пост</th>

    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
    <tr>
        <td></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td></td>
        <td>Время последнего поста</td>
    </tr>
    @endforeach
    </tbody>
</table>

{{$users->links('vendor.pagination.bootstrap-4')}}

@endsection
