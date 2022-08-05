@include('base')

@yield('content')
<div class="container">

    <div class="d-flex justify-content-center">
        <a href="{{ route('newArticle') }}" class="btn btn-info my-3"> <i class="fas fa-plus"></i> Ajouter un nouvel
            article</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Créé le</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Content</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td>{{ $article->dateFormatted() }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->subtitle }}</td>
                    <td>{!! $article->content !!}</td>
                    <td> <a href="" class="btn btn-danger">Delete</a></td>
                    <td> <a href="" class="btn btn-info">Edit</a></td>
                    <td><a class="btn btn-info" href="{{ route('showArticle', $article->slug) }}">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5 mb-3">
        {{ $articles->links('vendor/pagination/custom') }}
    </div>

</div>
