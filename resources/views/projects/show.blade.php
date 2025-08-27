@extends('layouts.projects')
@section('nome', $project->nome)
@section('contenuto')
<h2>
    <h5>
    Cliente -> {{$project ->cliente}}
    </h5>
    <h6>periodo:  - {{$project ->periodo}}</h6>
    <p> {{$project ->riassunto}}</p>
</h2>
@endsection