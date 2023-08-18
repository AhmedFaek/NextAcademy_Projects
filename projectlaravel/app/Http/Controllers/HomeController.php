<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {



        $task=todoModel::all();
        return view('home') -> with ('task',$task);
    }

    public function new()
    {
        return view('newtask');
    }

    public function add(request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'details' => 'required|string|min:8',
            'deadline' => 'required|string',
        ]);

        todoModel::create($validatedData);

        return redirect (to:'/home');
    }

    public function delete($id)
    {
        $task = todoModel::find($id); 

        $task->delete(); 

        return redirect('/home');
    }

    public function edit($id)
    {
        $task = todoModel::findOrFail($id); 

        return view('edit')->with('task', $task); 
    }

    public function update(request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:20',
            'details' => 'required|string|min:8',
            'deadline' => 'required|string',
        ]);

        $task = todoModel::findOrFail($id);
        $task->update($validatedData); 

        return redirect('/home');
    }
}
