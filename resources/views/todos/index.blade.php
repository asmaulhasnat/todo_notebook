@extends('layout.baselayout')
@section('content')
<div class="container text-center">
        <!-- heading -->
        <h1 class="pull-xs-left">
            Your Todo
        </h1>
        <div class="pull-xs-right">
            <a class="btn btn-primary" href="{{ route('todo-topic.create')}}" role="button">
                New Todo +
            </a>
        </div>

        <div class="clearfix">
        </div>
        <br>

        <!-- ================ Todos==================== -->
        <!-- todo -->
        @foreach($todo as $key=>$value)
            <div class="col-sm-6 col-md-3">
                <div class="card">
                    <div class="card-block">
                        <a href="{{route('todo-topic.show',$value->id)}}">
                            <h4 class="card-title">
                                {{$value->name}}
                            </h4>
                        </a>
                    </div>
                    <a href="{{route('todo-topic.show',$value->id)}}">
                        <img alt="Responsive image" class="img-fluid" src="{{asset('dist/img/todo.jpg')}}"/>
                    </a>
                    <div class="card-block">
                        <a class="card-link" href="{{route('todo-topic.edit',$value->id)}}">
                            Edit Todo
                        </a>
                        <form action="{{route('todo-topic.destroy',$value->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                            <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                            </input>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
