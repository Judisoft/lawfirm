<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\Programme;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutions = Institution::orderBy('institution_name', 'ASC')->get();
        //return dd($institutions);
        return view('admissions.institutions', compact('institutions'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institution = Institution::find($id);
        $hndProgrammes = Programme::where('institution_id', $id)->where('level', 'hnd')->get();
        $bachelorsProgrammes = Programme::where('institution_id', $id)->where('level', 'bachelors')->get();
        $mastersProgrammes = Programme::where('institution_id', $id)->where('level', 'masters')->get();
        $phdProgrammes = Programme::where('institution_id', $id)->where('level', 'phd')->get();
        //return dd($programmes);
        return view('admissions.institution_details', compact('institution', 'hndProgrammes', 'bachelorsProgrammes', 'mastersProgrammes', 'phdProgrammes'));
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
    public function destroy($id)
    {
        //
    }
}
