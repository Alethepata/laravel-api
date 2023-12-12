<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects= Project::with('type','tecnologies', 'user')->get();
        return response()->json(compact('projects'));
    }
    public function projectDetails($slug){
        $project= Project::where('slug',$slug)->with('type','tecnologies')->first();
        if($project->image){
            $project->image = asset('storage/'. $project->image);
        }else{
            $project->image = asset('/img/placeholder.png');
        }
        return response()->json(compact('project'));
    }
    public function search($searech){
        $projects= Project::with('type','tecnologies')->where('title','like','%'.$searech.'%')->get();
        return response()->json(compact('projects'));
    }
}
