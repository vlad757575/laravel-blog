@include('base')
@dump(Session::all())
@yield('content')
<div class="jumbotron">
    <h1 class="text-center mt-5">Nos articles</h1>
    <div class="articles row justify-content-center">
        @foreach ($articles as $article)
            <div class="col-md-6">
                <div class="card my-3">
                    <div class="card-body">
                        <h3 class="card-title"> {{ $article->title }}</h3>
                        <p class="card-text">{{ $article->subtitle }}</p>
                        <a href="{{ route('showArticle', $article->slug) }}" class="btn btn-info">
                            Lire l'article
                            <i class="fas fa-arrow-right"></i>
                        </a>

                    </div>
                </div>

            </div>
        @endforeach
        <div class="d-flex justify-content-center mt-5 mb-3">
            {{ $articles->links('vendor/pagination/custom') }}
        </div>
    </div>
</div>
