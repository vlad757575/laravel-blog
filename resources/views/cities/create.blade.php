@extends('base')

@section('content')
<form action="/cities" method="POST" class="form-example container">
    @csrf
    <div class="form-example">
      <label for="nom">Nom de la ville: </label>
      <input type="text" name="nom" id="nom" >
    </div>
    @error('nom')
        {{$message}}
        
    @enderror

    <div class="form-example">
      <label for="email">Pays: </label>
      <input type="text" name="email" id="email" required>
    </div>
    
    <div class="form-example">
      <label for="email">Population: </label>
      <input type="text" name="email" id="email" required>
    </div>
    <div class="form-example">
      <label for="email">A propos: </label>
      <input type="text" name="email" id="email" required>
    </div>
    <div class="form-example">
      <input type="submit" value="Subscribe!">
    </div>
  </form>
  @endsection
 
  
  

  
    
