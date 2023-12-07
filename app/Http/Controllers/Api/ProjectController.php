<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index(){
        $projects= Project::with('type','tecnologies')->get();
        return response()->json(compact('projects'));
    }
    public function projectDetails($slug){
        $project= Project::where('slug',$slug)->with('type','tecnologies')->first();
        return response()->json(compact('project'));
    }
}
