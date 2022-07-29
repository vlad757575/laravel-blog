@extends('base')

@section('content')
    <h1 class="m-5 text-center"> {{ $article->title }}</h1>
    <div class=" text-center row justify-content-center">
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-body">
                    <p class="card-text">{{ $article->subtitle }}</p>
                    <p class="card-text">{{ $article->content }}</p>
                    <a href="{{ route('article') }}" class="btn btn-info"> Tout les articles</a>
                </div>
            </div>

        </div>
    </div>
@endsection
