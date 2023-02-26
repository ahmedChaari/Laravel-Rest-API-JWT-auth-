<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\ProjectRequest;
use App\Http\Resources\Project\ProjectResource;
use App\Http\Resources\Task\TaskResource;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function storeProject(ProjectRequest $request)
    {
        $project  = new Project();         
            $project->name            = $request->name;
            $project->date_created    = $request->date_created;
            $project->save();

        return response([
                $project ,
            'status' => 'success',
            'message'    => 'Create a new project !',
                ], 201);
    }

    public function storeTaskProject(Request $request,$id)
    {
        
        
        $taskArray = explode("," ,$request->tasks);
            foreach ($taskArray as $taskSingle){
                $task= Task::findOrFail($taskSingle);
                $task->update([   
                    'project_id'     =>  $id,
                    ]);
            }
            $project= Project::findOrFail($id);

            $project = (new ProjectResource($project)) ;

            return response([
                $project ,
            'status' => 'success',
            'message'    => 'Add tasks to these projects !',
                ], 201);
    }
}
