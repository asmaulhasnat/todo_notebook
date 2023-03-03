<?php

    namespace App\Http\Controllers;

    use App\Models\TodoDetail;
    use Illuminate\Http\Request;

    class TodoDetailController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            //
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            //
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $this->validate($request, ['title' => 'required', 'body' => 'required']);
            TodoDetail::create($request->all());
            return redirect(route("todo-topic.show", $request->todo_master_id));
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $data['todo']=TodoDetail::find($id);
            return view('todos.details.show',$data);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $data['todo']=TodoDetail::find($id);
            return view('todos.details.edit',$data);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, $id)
        {
            $inputdata= $request->all();
            $details=TodoDetail::find($id);
            $update=$details->update($inputdata);
            if ($update) {
                return  redirect(route("todo-topic.show",$details->todo_master_id));
            }
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $details=TodoDetail::find($id);
            $details->delete();
            return  redirect(route("todo-topic.show",$details->todo_master_id));
        }

        public function createDetails($id)
        {
            return view('todos.details.create')->with('id', $id);
        }


    }
