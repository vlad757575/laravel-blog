@include('base')

@yield('content')
<div class="container">

    <div class="d-flex justify-content-center">
        <a href="{{ route('create') }}" class="btn btn-info my-3"> <i class="fas fa-plus"></i> Ajouter un nouvel
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
                    <td>
                        <button type="button"
                            onclick="document.getElementById('open-modal-{{ $article->slug }}').style.display='block' "
                            class="btn btn-danger">
                            Supprimer</button>
                    </td>
                    <form action="{{ route('delete', $article->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        {{-- modal --}}
                        <div class="modal" id="open-modal-{{ $article->slug }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Cette action est definitive !</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"
                                            onclick="document.getElementById('open-modal-{{ $article->slug }}').style.display='none' ">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Etes-vous sur de vouloir supprimer cet article ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Oui</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                            onclick="document.getElementById('open-modal-{{ $article->slug }}').style.display='none' ">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}

                    </form>
                    <td> <a href="{{ route('edit', $article->id) }}" class="btn btn-info">Edit</a></td>
                    <td><a class="btn btn-info" href="{{ route('showArticle', $article->slug) }}">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center mt-5 mb-3">
        {{ $articles->links('vendor/pagination/custom') }}
    </div>

</div>
