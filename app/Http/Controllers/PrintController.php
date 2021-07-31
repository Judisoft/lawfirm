<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Institution;
use Sentinel;

class PrintController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printApplicationForm() {

        $user = Sentinel::getUser();
        $inst = Sentinel::getUser()->institution;
        $institution_info = Institution::all()->where('institution_name', $inst);
        //return dd($institution_info);
        return view('print', compact('user', 'institution_info'));
    }
}
