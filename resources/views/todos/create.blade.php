@extends('todos.layout')
@section('contend')
<div class="continer col-md-9" style="margin:40px  auto">
<form method="POST" action="{{route('todo.store') }}">
    <div class="form-group">
      <label for="exampleInputEmail1">todo name</label>
      <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Name" name="name">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">disc</label>
     <textarea class="form-control" name="disc" id="" cols="30" rows="10"></textarea>
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection