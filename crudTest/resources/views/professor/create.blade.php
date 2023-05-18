@extends('professor.frame')
@section('content')
  
<div class="card" style="background-color: #72a68f; margin:20px;">
  <div class="card-header">Criar novos Professores</div>
  <div class="card-body">
       
      <form action="{{ url('/professor') }}" method="post">
        {!! csrf_field() !!}
        <label>Nome</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Celular</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        <label>Endereço</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Curso</label></br>
        <input type="text" name="course" id="course" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-dark"></br>
    </form>
    
  </div>
</div>
  
@stop