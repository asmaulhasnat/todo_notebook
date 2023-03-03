@extends('layout.baselayout')
@section('content')
            <!-- Main component for call to action -->
            <div class="container">
                <h1 class="pull-xs-left">
                    Your Todo ({{$todo->name}})
                </h1>
                <div style="margin-left: 5px" class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('todo-topic.index')}}" role="button">
                        back
                    </a>
                </div>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('todo-details.createDetails',$todo->id)}}" role="button">
                        Todo Details +
                    </a>
                </div>
                <div class="clearfix">
                </div>

                <div class="list-group notes-group">
                  @foreach($todo->TodoDetail as $value)
                           <div class="card card-block">
                                <a href="{{route('todo-details.show',$value->id)}}">
                                    <h4 class="card-title">
                                      {{$value->title}}
                                    </h4>
                                </a>
                                <p class="card-text">
                                      {{$value->body}}
                                </p>
                                <a class="btn btn-sm btn-info pull-xs-left" href="{{route('todo-details.edit',$value->id)}}">
                                    Edit
                                </a>
                                <form action="{{route('todo-details.destroy',$value->id)}}" class="pull-xs-right" method="POST">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete">

                                </form>
                            </div>
                      @endforeach

                </div>
            </div>
            <!-- /container -->
             @endsection
