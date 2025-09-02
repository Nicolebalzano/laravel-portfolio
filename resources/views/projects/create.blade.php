@extends('layouts.projects')
@section('nome', 'aggiungi un progetto')
@section('contenuto')
<form action="{{route('projects.store')}}" method='POST'>
    @csrf
    <div class="form-control mb-3 d-flex flex-column">
        <label for="nome">Nome</label>
        <input type="text" name='nome' id='nome'>
    
    </div>
      <div class="form-control mb-3 d-flex flex-column">
          <label for="cliente">Cliente</label>
        <input type="text" name='cliente' id='cliente'>
      
    </div>
      <div class="form-control mb-3 d-flex flex-column">
        <label for="periodo">Periodo</label>
        <input type="text" name='periodo' id='periodo'> 
    </div>
    <div class="form-control mb-3 d-flex flex-wrap">
      @foreach($technologies as $technology)
      <div class="tag me-3">
            <input type="checkbox"name='technologies[]' value='{{$technology->id}}' id='technology-{{$technology->id}}'>
      <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
      </div>
  
      @endforeach
    </div>
      <div class="form-control mb-3 d-flex flex-column">
         <label for="riassunto">Riassunto</label>
       <textarea name="riassunto" id="riassunto"></textarea>
    </div>
<input type="submit" value='Salva' class='btn btn-success px-4'>
</form>
@endsection