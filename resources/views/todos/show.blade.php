@extends('todos.layout')
@section('contend')
<div class="continer">

    <div class="jumbotron">
        <h1 class="display-4">{{$todo->name}}</h1>
        <p class="lead">{{$todo->disc}}</p>
        <p> <span>
          @if ($todo->done==1)
          <i style="color: #11ff00"> completid</i> 
          @else
              <i  style="color: #d30d0d">not complited</i>
          @endif 
        </span></p>
        <hr class="my-4">
       
        <p class="lead">
          <div class=" forum-item col-md-5" style="justify-content: space-between" >
            <span class="col-md-1 ">
                
               
                        <a class="btn btn-small btn-success" href="{{ route('todo.show', $todo->id)}}">
                            show
                        </a>
                    
                
                </span>

            <span class="col-md-1 ">
        
                <a class="btn btn-small btn-primary" href="{{ route('todo.edit', $todo->id)}}">
                    edit
                </a>
            </span> 

            <span class="col-md-1">
                    <form style="display: inline" action="{{route('todo.destroy', $todo->id)}}" method="POST">
                      @csrf
<input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-small btn-danger" >
                    delet
                </button>
              </form>
            </span>
    </div>
        </p>
      </div>

</div>
@endsection