<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alltodos = todo::latest()->get();
        return view('todos.index')->with('alltodos',$alltodos);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'disc' => 'required',
           
            ]);
            $todo = new todo;
            $todo->name = $request->name;
            $todo->disc = $request->disc;
            $todo->done = false;
            $todo->save();
            return redirect()->route('todo.index')
            ->with('success','Company has been created successfully.');
    }

    public function show($id)
    {
        $todo = todo::find($id);
        return view('todos.show')->with('todo',$todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $todo = todo::find($id);
       return view('todos.edit')->with('todo',$todo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
                $validatedData = $request->validate([
                    'name' => 'required|max:255',
                    'disc' => 'required',
                    'done'=>'required'
                ]);
               $todo = todo::find($id);
               $todo->name = $request->name;
               $todo->disc = $request->disc;
               $todo->done =( $request->done=="on")?1:0;
               $todo->update();
        
                return redirect()->route('todo.index')->with('success', 'todo Data is successfully updated');
        
    }

        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
            // delete
             todo::find($id)->delete();
    
            // redirect
            return redirect()->route('todo.index')->with('success', 'todo Data is successfully deleted');
        }
}
