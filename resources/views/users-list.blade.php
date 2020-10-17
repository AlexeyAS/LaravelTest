@extends('layouts.app')

@section('title-block')
    Список пользователей
@endsection

@section('content')
    <div class="container">
        <form action="">
            <div class="form-group">
                <label for="exampleInputEmail">Search by name</label>
                <input type="text" name="search" class="form-control" id="search" placeholder="Поиск">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Search by email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Поиск">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <hr>
        <div>
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