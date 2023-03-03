@extends('layout.baselayout')
@section('content')
   <div class="container text-center">
   <div class="row">
   <div class="col-sm-6">
   		<a class="btn btn-success" href="{{route('todo-topic.show',$todo->todo_master_id)}}">back</a><br><br>
   	</div>
   	<div  class="col-sm-12">
   	<div class="well" style="border: 1px solid #ccc">
   	<center style="font-size: 32px">Details </center>
   		<h1 class="text-center text-danger">{{$todo->title}}</h1><hr>
   		<p class="text-justify">{{$todo->body}}</p>
   	</div>
   	</div>

   </div>
   	</div>
 @endsection
