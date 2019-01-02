<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
	{
        $tasks = Task::orderBy('created_at', 'ASC')->get();
    	return view('tasks.index', compact('tasks'));
	}
    
    public function store(TaskRequest $request) 
    {
    	$name = $request->name;
    	$request->user()->tasks()->create([
        	'name' => $name,
   		]);
    	return redirect('/tasks');
    }

    public function delete($id)
    {
        try {
            $task = Task::findOrFail($id);
            $task->delete();
            return redirect("/tasks")->with('messageD', trans('home.message-del-success'));
        } 
        catch (Exception $exception) {
            return redirect("/tasks")->with('messageD', trans('home.message-del-fail'));
        }
    }
}
