<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Equipment;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Project $project)
    {
        $this->data['equipmentList'] = Project::find($project->id)->equipments; 
        $this->data['project_id'] = $project->id;

        return view('equipments', $this->data);
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
    public function store($project_id, Request $request)
    {
        // dd($project_id);

        $equipment = new Equipment($request->all());
        $equipment->project_id = $project_id;

        $equipment->save();       

        return redirect('projects/'.$project_id.'/equipment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($project_id, $equipment_id)
    {
        $currentProjectID = Equipment::find($equipment_id)->project_id;
        Equipment::find( $equipment_id)->delete();

        return redirect('projects/'.$project_id.'/equipment');
    }
}
