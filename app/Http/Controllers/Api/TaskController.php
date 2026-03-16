<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index(Request $request)
    {
        return response()->json($request->user()->tasks);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|string|max:255",
            "description" => "nullable|string",
            "status" => "required|string"
        ]);

        $task = $request->user()->tasks()->create($validated);

        return response()->json($task, 201);
    }

    public function update(Request $request, $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);

        $task->update($request->all());

        return response()->json($task);
    }

    public function destroy(Request $request, $id)
    {
        $task = $request->user()->tasks()->findOrFail($id);

        $task->delete();

        return response()->json([
            "message" => "Task deleted"
        ]);
    }

}