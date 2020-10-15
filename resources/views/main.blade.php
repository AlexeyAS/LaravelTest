@extends('layouts.app')

@section('title-block')
    Главная
@endsection


@section('content')

    <h1>Main Front Content</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
        a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions
        of Lorem Ipsum.</p>
@endsection


@section('aside')
    @auth
    @parent
    <a class="btn btn-danger p-2 text-dark" href="{{ route('send') }}">Отправить спам на почту</a>
    @endauth
@endsection

