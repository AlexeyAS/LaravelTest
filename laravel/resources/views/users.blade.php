@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail">Search by name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Поиск" value="{{$request->name}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Search by email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Поиск" value="{{$request->email}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <hr>
        <div>
            <h2>
                Users
            </h2>
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
                        <td>{{$postings[$user->name]['count']}}</td>
                        <td>{{$postings[$user->name]['created_at']}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$users->links('vendor.pagination.bootstrap-4')}}

    </div>
    @endsection