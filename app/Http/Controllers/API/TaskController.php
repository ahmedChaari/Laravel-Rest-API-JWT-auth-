<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct() {
        $this->middleware('auth:api');
    }
    public function listTaks(Request $request)
    {
        $query =  $request->get('search');
        $filter    =  $request->get('filter') != '' ? $request->get('filter') : 'created_at' ;
        $filterType = $request->get('filter_type') == 'DESC' ? 'DESC' : 'ASC';

        
        $tasks = TaskResource::collection(Task::latest()
                ->orderBy( $filter, $filterType)
                ->where( function($mquery) use ($query) {
                    $mquery->where('name', 'LIKE', "%{$query}%");
                })
                ->paginate(10));
                return response([
                    'status' => 'success',
                    'message' => 'list the tasks',
                    'tasks' => $tasks,
                ]);
        
    }
    public function showTak($id)
    {        
        $task =  Task::find($id);
        if (!$task) {
            return response([
                'message'    => 'Task does not existing  !',
                    ], 400);
        }else {
            return response([
                new TaskResource($task) ,
                'message'    => 'Get the task !',
                    ], 200);
        }

    }

}
