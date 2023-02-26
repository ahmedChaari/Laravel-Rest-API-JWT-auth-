<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\Team\TeamResource;
use App\Models\Task;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct() {
        $this->middleware('auth:api');
    }
    
    public function storeTaskTeam(Request $request,$id)
    {
        
        $taskArray = explode("," ,$request->tasks);
            foreach ($taskArray as $taskSingle){
                $task= Task::findOrFail($taskSingle);
                $task->update([   
                    'team_id'     =>  $id,
                    ]);
            }
            $team= Team::findOrFail($id);

               $team = (new TeamResource($team)) ;

            return response([
                $team ,
            'status' => 'success',
            'message'    => 'Assign tasks to team members !',
                ], 201);
    }
}