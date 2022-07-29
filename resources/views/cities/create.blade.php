@extends('base')

@section('content')
<form action="/cities" method="POST" class="form-example container">
    @csrf
    <div class="form-example">
      <label for="nom">Nom de la ville: </label>
      <input type="text" name="nom" id="nom" >
      @error('nom')
          {{$message}}
      @enderror
    </div>
   

    <div class="form-example">
      <label for="country">Pays: </label>
      <input type="text" name="country" id="country" >
      @error('nom')
      {{$message}}
  @enderror
    </div>
    
    <div class="form-example">
      <label for="population">Population: </label>
      <input type="text" name="population" id="email" >
      @error('population')
      {{$message}}
  @enderror
    </div>
    <div class="form-example">
      <label for="about">A propos: </label>
      <input type="text" name="about" id="email" >
      @error('about')
      {{$message}}
  @enderror
    </div>
    <div class="form-example">
      <input type="submit" value="Subscribe!">
    </div>
  </form>
  @endsection
 
  
  

  
    
