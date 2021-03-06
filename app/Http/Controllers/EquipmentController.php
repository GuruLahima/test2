<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Equipment;
use App\Category;
use App\Subcategory;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $this->data['equipment'] = Category::where('project_id', $id)->with('subcategories', 'subcategories.equipment')->get();        
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

        Equipment::create($request->all());

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
