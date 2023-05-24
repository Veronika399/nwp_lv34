<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project_User;
use App\Models\Project;

class UserController extends Controller
{
    function index(){
        $projectIds = Project_User::whereJsonContains('team_members_id',  strval(auth()->user()->id))->get();
        $projectsWhereUserIsManager = Project::where('voditelj_id','=',strval(auth()->user()->id))->get();
        
        $projects= array();
        foreach ($projectIds as $id) {
            $projects[] = Project::find($id->project_id);
          }
        return view('users.index',['user'=>auth()->user(),'projects'=>$projects, 'myProjects'=>$projectsWhereUserIsManager]);
    }

}
