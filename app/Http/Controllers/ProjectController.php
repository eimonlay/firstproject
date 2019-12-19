<?php

namespace App\Http\Controllers;
use App\Project; // call model


use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProjectController extends Controller
{
    public function index(){
       $projects=Project::all();
       //return $projects;
        return view('projects.index',compact('projects'));

    }

    public function create(){
        
         return view('projects.create');
 
     }

      public function store(){

        $projet = new Project;

        $projet->title = request('title');
        $projet->description = request('description');
        $projet->save();
        return redirect('/projects');
        
       //return request()->all();
        //return request('title');

 
     }

     public function edit(){
      return view('project.edit');
     }

}
 