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
      <div class="form-control mb-3 d-flex flex-column">
         <label for="riassunto">Riassunto</label>
       <textarea name="riassunto" id="riassunto">{{$project->riassunto}}</textarea>
    </div>
<input type="submit" value='Salva' class='btn btn-success px-4'>
</form>
@endsection