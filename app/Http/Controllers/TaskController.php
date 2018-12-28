<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index(Request $request)
	{
    	return view('tasks.index');
	}
    public function store(Request $request)
    {
    	$name = $request->name;
    	$request->user()->tasks()->create([
        	'name' => $name,
   		]);
    	return redirect('/tasks');
    }
}
