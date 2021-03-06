<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChecklistGroupRequest;
use Illuminate\Http\Request;
use App\Models\ChecklistGroup;

class ChecklistGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.checklist_groups.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store( StoreChecklistGroupRequest $request)
     {
         ChecklistGroup::create($request->validated());  
        //  ChecklistGroup::create([
        //      'name' => $request['name'],
        //  ]);
         return redirect()->route('home');
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
    public function edit(ChecklistGroup $checklistGroup )
    {
        // direct model binding
        return view('admin.checklist_groups.edit', compact('checklistGroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreChecklistGroupRequest $request, ChecklistGroup $checklistGroup)
    {
        //
       $checklistGroup->update($request->validated());  
        //  ChecklistGroup::create([
        //      'name' => $request['name'],
        //  ]);
         return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChecklistGroup $checklistGroup)
    {
        //  model binding with group id to object
        $checklistGroup->delete();
        return redirect()->route('home');

    }
}
