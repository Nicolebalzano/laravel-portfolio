@extends('layouts.projects')
@section('nome', $project->nome)
@section('contenuto')
<div class="d-flex gap-2">
    <a href="{{route('projects.edit', $project->id)}}" class='btn btn-warning'>Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Elimina
</button>
</div>
<h2>
    <h5>
    Cliente -> {{$project ->cliente}}
    </h5>
    <h6>periodo:  - {{$project ->periodo}}</h6>
    <p> {{$project ->riassunto}}</p>
</h2>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler eliminare il post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-danger">Elimina definitivamente</button> -->
           <form action="{{route('projects.destroy', $project)}}" method='POST'>
        @csrf
        @method('DELETE')
              <input type='submit' value='Elimina definitivamente' class='btn btn-danger'>
    </form> 
      </div>
    </div>
  </div>
</div>
@endsection