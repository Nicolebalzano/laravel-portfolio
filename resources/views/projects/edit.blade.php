@extends('layouts.projects')
@section('nome', 'modifica un progetto')
@section('contenuto')
<form action="{{route('projects.update', $project->id)}}" method='POST'>
    @csrf
    @method('PUT')
    <div class="form-control mb-3 d-flex flex-column">
        <label for="nome">Nome</label>
        <input type="text" name='nome' id='nome' value='{{$project->nome}}'>
    
    </div>
      <div class="form-control mb-3 d-flex flex-column">
          <label for="cliente">Cliente</label>
        <input type="text" name='cliente' id='cliente' value='{{$project->cliente}}'>
      
    </div>
      <div class="form-control mb-3 d-flex flex-column">
        <label for="periodo">Periodo</label>
        <input type="text" name='periodo' id='periodo' value='{{$project->periodo}}'>
        
    </div>
     <div class="form-control mb-3 d-flex flex-wrap">
      @foreach($technologies as $technology)
      <div class="tag me-3">
            <input type="checkbox" name='technologies[]' value='{{$technology->id}}' id='technology-{{$technology->id}}' {{ $project->technologies->contains($technology->id) ? 'checked' : ''}}>
      <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
      </div>
  
      @endforeach
    </div>
      <div class="form-control mb-3 d-flex flex-column">
         <label for="riassunto">Riassunto</label>
       <textarea name="riassunto" id="riassunto">{{$project->riassunto}}</textarea>
    </div>
<input type="submit" value='Salva' class='btn btn-success px-4'>
</form>
@endsection