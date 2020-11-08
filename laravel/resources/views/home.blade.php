@extends('main')

@section('content')

<div class="container mb-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body mx-auto">
                    @if (session('status'))
                        <div class="alert alert-success centered" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@parent
@endsection
