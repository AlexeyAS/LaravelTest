@extends('layouts.app')

@section('content')
    <div class="container">
        <form>
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
            <h2>
                Users
            </h2>
            <ul>
                @foreach($users as $user)
                    <li>{{$user->name}}</li>
            @endforeach
            </ul>
        </div>
    </div>
    @endsection