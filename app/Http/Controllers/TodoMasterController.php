<?php

    namespace App\Http\Controllers;

    use App\Models\TodoDetail;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class TodoMasterController extends Controller
    {
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $user = Auth::user();
            $data['todo'] = $user->TodoMaster;
            return view('todos.index', $data);
        }

        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('todos.create');
        }

        /**
         * Store a newly created resource in storage.
         *
         * @param \Illuminate\Http\Request $request
         * @return \Illuminate\Http\Response
         */
        public function store(Request $request)
        {
            $user = Auth::user();
            $user->TodoMaster()->create($request->all());
            return redirect(route('todo-topic.index'));
        }

        /**
         * Display the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function show($id)
        {
            $user = Auth::user();
            $data['todo'] = $user->TodoMaster()->with('TodoDetail')->find($id);
            return view('todos.details.index', $data);
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function edit($id)
        {
            $user = Auth::user();
            $data['todo'] = $user->TodoMaster()->find($id);
            return view('todos.edit', $data);
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
            $user = Auth::user();
            $todo = $user->TodoMaster()->find($id);
            $todo->update($request->all());
            return redirect(route('todo-topic.index'));
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param int $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $user = Auth::user();
            $todo = $user->TodoMaster()->find($id);
            TodoDetail::where('todo_master_id')->delete();
            $todo->delete();
            return redirect(route('todo-topic.index'));
        }
    }
