<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;

use App\Project;

class ProjectTasksController extends Controller
{
    //

    public function store(Project $project){

    	$attr = request()->validate([
    		'description' => 'required|min:3'
    		]);
    	$project->addTask($attr); //  For used Better Encapsulation logic in model file

    	// Task::create([
    	// 	'project_id' => $project->id,

    	// 	'description' => request('description')

    	// 	]);

    	return back();

    }
 /* web.php file comment : Route::patch('/tasks/{task}','ProjectTasksController@update');

    public function update(Task $task){

    	//$task->complate(request()->has('complated'));
    	
    	// $task->update([
    	// 	'complated' => request()->has('complated')
    	// 	]);
    	
    	$method = request()->has('complated') ? 'complate':'incomplate'; // For used Better Encapsulation logic in model file

    	$task->$method();
    	return back();
    	
    }
*/
}
