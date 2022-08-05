@if ($message = Session::get('success'))
    <div class="alert alert-block alert-success">
        <strong>{{ $message }}</strong>
        <button type="button" class="close" data-dismiss="alert">x</button>
    </div>
@endif
