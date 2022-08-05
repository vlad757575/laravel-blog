@include('base');

@yield('content')
@dump($errors->all())
<div class="container">

    <h1 class="text-center m-4"></h1>

    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="col-12">
            <div class="form-group">
                <label for="">Titre</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="Titre de votre article" />
                @error('title')
                    <span class="invalid-feedback" role="alert"></span>
                    <strong style="color:red;">{{ $message }}</strong>
                @enderror
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="">Sous-titre</label>
                <input type="text" name="subtitle" class="form-control @error('subtitle') is-invalid @enderror"
                    placeholder="Sous-titre de votre article" />
                @error('subtitle')
                    <span class="invalid-feedback" role="alert"></span>
                    <strong style="color:red;">{{ $message }}</strong>
                @enderror
                <small class="form-text text-muted">Décrivez le contenu de votre article</small>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <label for="">Contenu</label>
                <textarea name="content" id="tinycme-editor" class="form-control w-100 @error('content') is-invalid @enderror"
                    cols="30" rows="10" placeholder="Le contenu de votre article"></textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert"></span>
                    <strong style="color:red;">{{ $message }}</strong>
                @enderror
            </div>

            <script>
                tinymce.init({
                    selector: '#tinycme-editor'
                });
            </script>
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Publier</button>
        </div>
    </form>
</div>
