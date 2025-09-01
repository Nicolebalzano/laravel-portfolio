@extends('layouts.projects')
@section('nome', 'tutti i post')
@section('contenuto')
<div class="d-flex gap-2">
    <a href="{{route('projects.create')}}" class='btn btn-primary'>Aggiungi un post</a>
</div>
<table>
    <thead>
        <tr>
        <th>Nome</th>
        <th>Cliente</th>
        <th>Periodo</th>
        <th>Riassunto</th>
        </tr>
    </thead>
<tbody>
    @foreach($projects as $project)
    <tr>
        <td>{{$project->nome}}</td>
         <td>{{$project->cliente}}</td>
          <td>{{$project->periodo}}</td>
           <td>{{$project->riassunto}}</td>
           <td><a href="{{route ('projects.show', $project->id)}}">Scopri di più</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection