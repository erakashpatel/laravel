<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;


class ComplatedTaskController extends Controller
{
    //

    public function store(Task $task){

    	$task->complate();

    	return back();
    }

    public function destroy(Task $task){

    	$task->incomplate();

    	return back();

    }
}
