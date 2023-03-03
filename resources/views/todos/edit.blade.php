@extends('layout.baselayout')
@section('content')
   <div class="container text-center">
   <div class="row">
   	<div class="col-md-12 col-sm-12">


               <div style="margin-bottom: 5px" class="pull-xs-right">
                    <a class="btn btn-primary" href="{{ route('todo-topic.index') }}" role="button">
                        back
                    </a>
                </div>
       </div>
   </div>
   	<div class="row">

   		<div  style="" class="col-md-6 col-sm-12">
   		<h1 class="bg-warning">Edit your todo</h1>
				<form class="form-horizontal" action="{{ route('todo-topic.update',$todo->id)}}" method="post">
				{{csrf_field()}}
				{{method_field('PUT')}}
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="name">Todo Name:</label>
			      <div class="col-sm-9">
			        <input type="text" name="name" class="form-control" id="name" value="{{$todo->name}}">
			      </div>
			    </div>

			    <div class="form-group">
			      <div class="col-sm-offset-3 col-sm-9">
			      <br>
			        <input type="submit" class="btn btn-default" value="update">
			      </div>
			    </div>
			  </form>
           </div>

           </div>
 @endsection
