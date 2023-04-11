@extends('todos.layout')
@section('contend')
 
<div class="container">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
    <p>{{ $message }}</p>
    </div>
    @endif

    
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
               <div class="card" style="background-color:rgb(209, 209, 209); border-color:rgba(209, 209, 242, 0.683);">
                 <div class="card-body row"  style="display: flex">
                  
                <div class="row" style="justify-content:space-between">
                    <h1 class="col-md-3" style="text-align: center">Todo App </h1>
                    <span class="col-md-2">
                        <a href="{{ route('todo.create')}}" class="btn btn-primary ">Add  new todo</a>
                    </span>
                   
                </div>
                 </div>
               </div>
               
    
                <div class="ibox-content forum-container">
    
                 
    @foreach ($alltodos as $todo)
        
    
                    <div class="forum-item active">
                        <div  class="row " style=" justify-content: space-between ">
                            <div  class="col-md-4">
                                <div class="forum-icon">
                                    <i class="fa fa-shield"></i>
                                </div>
                            
                                <h3  class="forum-item-title">
                                  
                                  
                                
                                  
                                  
                                  {{$todo->name}} [    @if ($todo->done==1)
                                  <span style="color: #11ff00"> completid</span> 
                                  @else
                                      <span  style="color: #d30d0d">not complited</span>
                                  @endif ]</h3>
                           
                            </div>
                            <div class=" forum-item col-md-5" style="justify-content: space-between" >
                                    <span class="col-md-1 ">
                                        
                                       
                                                <a class="btn btn-small btn-success" href="{{ route('todo.show', $todo->id)}}">
                                                    SHOW
                                                </a>
                                            
                                        
                                        </span>

                                    <span class="col-md-1 ">
                                
                                        <a class="btn btn-small btn-primary" href="{{ route('todo.edit', $todo->id)}}">
                                            EDIT
                                        </a>
                                    </span> 

                                    <span class="col-md-1">
                                            <form style="display: inline" action="{{route('todo.destroy', $todo->id)}}" method="POST">
                                              @csrf
<input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-small btn-danger" >
                                            DELETE
                                        </button>
                                      </form>
                                    </span>
                            </div>
                        </div>
                    </div>
                   
    @endforeach  
                </div>
            </div>
        </div>
    </div>
    </div>  
<style>

body{margin-top:20px;
background:#eee;
}

.white-bg {
    background-color: #ffffff;
}
.page-heading {
    border-top: 0;
    padding: 0 10px 20px 10px;
}

.forum-post-container .media {
  margin: 10px 10px 10px 10px;
  padding: 20px 10px 20px 10px;
  border-bottom: 1px solid #f1f1f1;
}
.forum-avatar {
  float: left;
  margin-right: 20px;
  text-align: center;
  width: 110px;
}
.forum-avatar .img-circle {
  height: 48px;
  width: 48px;
}
.author-info {
  color: #676a6c;
  font-size: 11px;
  margin-top: 5px;
  text-align: center;
}
.forum-post-info {
  padding: 9px 12px 6px 12px;
  background: #f9f9f9;
  border: 1px solid #f1f1f1;
}
.media-body > .media {
  background: #f9f9f9;
  border-radius: 3px;
  border: 1px solid #f1f1f1;
}
.forum-post-container .media-body .photos {
  margin: 10px 0;
}
.forum-photo {
  max-width: 140px;
  border-radius: 3px;
}
.media-body > .media .forum-avatar {
  width: 70px;
  margin-right: 10px;
}
.media-body > .media .forum-avatar .img-circle {
  height: 38px;
  width: 38px;
}
.mid-icon {
  font-size: 66px;
}
.forum-item {
  margin: 10px 0;
  padding: 10px 0 20px;
  border-bottom: 1px solid #f1f1f1;
}

.forum-container,
.forum-post-container {
  padding: 30px !important;
}


.forum-title {
  margin: 15px 0 15px 0;
}
.forum-info {
  text-align: center;
}

.forum-icon {
  float: left;
  width: 30px;
  margin-right: 20px;
  text-align: center;
}

</style>
  
@endsection