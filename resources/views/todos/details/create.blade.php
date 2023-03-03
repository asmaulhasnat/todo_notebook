@extends('layout.baselayout')
@section('content')
   <div class="container text-center">
   <div class="col-md-12 col-sm-12">
   				<div style="margin-bottom: 5px" class="pull-xs-left">
                    <a class="btn btn-primary" href="{{route('todo-topic.index')}}" role="button">
                        home
                    </a>
                </div>

               <div style="margin-bottom: 5px" class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('todo-topic.show',$id)}}" role="button">
                        back
                    </a>
                </div>
       </div>
   	<div class="row">
   		<div class="col-md-6 col-sm-12">
   		@if(count($errors)>0)
   			<ul>@foreach($errors as $error)
   				<li>
   					{{$error}}
   				</li>
   				@endforeach
   			</ul>
		@endif
		<h1 class="bg-warning">Create your todo  details</h1>
		<form class="form-horizontal" action="{{url('todo-details')}}" method="post">
				{{csrf_field()}}
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="title">Task Title:</label>
			      <div class="col-sm-9">
			        <input type="text" name="title" class="form-control" id="title" placeholder="Enter  title here">
			        <input type="hidden" name="todo_master_id"  value="{{$id}}">
			        <br>
			      </div>
			    </div>

			    <div class="form-group">
			      <label class="control-label col-sm-3" for="body">Task details:</label>
			      <div class="col-sm-9">
			        <textarea name="body" class="form-control" id="body" placeholder="Enter task description here"></textarea>
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-sm-offset-3 col-sm-9">
			      <br>
			        <input type="submit" class="btn btn-default" value="add">
			      </div>
			    </div>
			  </form>
           </div>
           </div>
 @endsection
