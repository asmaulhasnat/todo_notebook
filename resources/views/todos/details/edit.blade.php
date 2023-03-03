@extends('layout.baselayout')
@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div style="margin-bottom: 5px" class="pull-xs-left">
                    <a class="btn btn-primary" href="{{route('todo-topic.index')}}" role="button">
                        home
                    </a>
                </div>

                <div style="margin-bottom: 5px" class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('todo-topic.show',$todo->todo_master_id)}}"
                       role="button">
                        back
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">

                <form class="form-horizontal" action="{{route('todo-details.update',$todo->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="title">Task title:</label>
                        <div class="col-sm-9">
                            <input type="text" name="title" class="form-control" id="title"
                                   value="{{$todo->title}}"><br>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3" for="body">Task Details:</label>
                        <div class="col-sm-9">
                            <textarea name="body" class="form-control" id="body">{{$todo->body}}</textarea>
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
