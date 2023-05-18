@extends('professor.frame')
@section('content')
  
<div class="card" style="background-color: #72a68f; margin:20px;">
  <div class="card-header">Editar PROFESSORES</div>
  <div class="card-body">
       
      <form action="{{ url('professores/' .$professor->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$professor->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$professor->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$professor->email}}" class="form-control"></br>
        <label>Celular</label></br>
        <input type="text" name="phone" id="phone" value="{{$professor->phone}}" class="form-control"></br>
        <label>Endereço</label></br>
        <input type="text" name="address" id="address" value="{{$professor->address}}" class="form-control"></br>
        <label>Curso</label></br>
        <input type="text" name="course" id="course" value="{{$professor->course}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-dark"></br>
    </form>
    
  </div>
</div>
  
@stop