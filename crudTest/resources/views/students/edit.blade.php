@extends('students.frame')
@section('content')
  
<div class="card" style="background-color: #72a68f; margin:20px;">
  <div class="card-header">Editar ESTUDANTES</div>
  <div class="card-body">
       
      <form action="{{ url('estudantes/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nome</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$students->email}}" class="form-control"></br>
        <label>Celular</label></br>
        <input type="text" name="phone" id="phone" value="{{$students->phone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-dark"></br>
    </form>
    
  </div>
</div>
  
@stop