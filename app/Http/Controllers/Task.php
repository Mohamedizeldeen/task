<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task as TaskModel;


class Task extends Controller
{
    function showAllTask(){
        $mytasks = TaskModel::all(); 
        return view("welcome",compact('mytasks'));
    }

    function addTask(Request $request){
        $task = new TaskModel();
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->save();
        return redirect()->route('home')->with('success', 'Task added successfully!');
    }

    function showTask($id){
        $task = TaskModel::find($id);
        if(!$task){
            return redirect()->route('home')->with('error', 'Task not found!');
        }
        return view('task', compact('task'));
    }

    function deleteTask($id){
        $task = TaskModel::find($id);
        if(!$task){
            return redirect()->route('home')->with('error', 'Task not found!');
        }
        $task->delete();
        return redirect()->route('home')->with('success', 'Task deleted successfully!');
    }

    function showForEdit($id){
        $task = TaskModel::find($id);
        return view('edit',['task'=>$task]);
    }
    function updateTask(Request $request, $id){
        $task = TaskModel::find($id);
        if(!$task){
            return redirect()->route('home')->with('error', 'Task not found!');
        }
    $updatesStatus = $request->input('status');
        function checkStatus( $updateStatus): int {
            return $updateStatus === 'pending' ? 0 : ($updateStatus === 'completed' ? 1 : 2);
        }
        
        $task->name = $request->input('name');
        $task->description = $request->input('description');
        $task->status = checkStatus($updatesStatus);
        $task->save();
        return redirect()->route('home')->with('success', 'Task updated successfully!');
    }
}
