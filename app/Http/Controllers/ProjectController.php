<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Equipment;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->data['allProjects'] = Project::all();

        return view('welcome', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $equipment = new Equipment($request->all());

        #SECURIY CONCERN! I use hidden input in the equipment view to pass project_id to this action.

        $equipment->save();       

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
        #echo Project::find($project->id)->equipments;
        #Project::with('Equipment')->find($project->id)
        $this->data['equipmentList'] = Project::find($project->id)->equipments;
        $this->data['project_id'] = $project->id;

        return view('equipments', $this->data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project, $equipment_id)
    {
        //
        #echo $equipment_id;
        #Project::find($project->id)->delete();

        #return redirect('/projects');
    }

    public function customDestroy($project_id, $equipment_id)
    {
        Equipment::find($equipment_id)->delete();

        return redirect('/projects');
    }
}
