@extends('professor.frame')
@section('content')
  
<div class="card" style="margin:20px; margin-top: 10%; background-color: #72a68f;">
  <div class="card-header">Página dos professores</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $professor->name }}</h5>
        <p class="card-text">Endereço : {{ $professor->email }}</p>
        <p class="card-text">Celular : {{ $professor->phone }}</p>
        <p class="card-text">Endereço : {{ $professor->address }}</p>
        <p class="card-text">Curso : {{ $professor->course }}</p>
  </div>
    </hr>
  </div>
</div>