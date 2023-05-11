@extends('students.frame')
@section('content')
  
<div class="card" style="margin:20px; margin-top: 10%; background-color: #72a68f;">
  <div class="card-header">Página dos estudantes</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Endereço : {{ $students->email }}</p>
        <p class="card-text">Celular : {{ $students->phone }}</p>
  </div>
    </hr>
  </div>
</div>