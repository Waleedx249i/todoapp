@extends('todos.layout')
@section('contend')
<div class="continer col-md-9" style="margin:40px  auto">
<form action="{{route('todo.update',$todo->id) }}" method="post">
  <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
      <label for="exampleInputEmail1">todo name</label>
      <input value="{{$todo->name}}" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Name" name="name">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">disc</label>
     <textarea class="form-control" name="disc" id="" cols="30" rows="10">
       {{$todo->disc}}
     </textarea>
    <div class="btn-group" data-toggle="buttons">
      <label class="btn ">
        notcomplate
        <input type="radio" name="done" value="off" autocomplete="off" checked>
      </label>
      <label class="btn ">
        compleate
        <input type="radio" name="done" value="on" autocomplete="off">
      </label>

    </div>
    </div>
    @csrf
    <button style="margin: 30px auto" type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection