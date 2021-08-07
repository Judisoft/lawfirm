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
     * @param  Request $request
     * @return \Illuminate\Http\Response
     */
    /*
    public function printApplicationForm(Request $request)
    {

        //$user = Senttinel::getUser();
        $institution_reg_form = $request->input('institution');

        switch ($institution_reg_form) {
            case Sentinel::getUser()->institution:
                $user = Sentinel::getUser();
                $inst = Sentinel::getUser()->institution;
                $institution_info = Institution::all()->where('institution_name', $inst);
                return view('print', compact('user', 'institution_info'));
              break;
            case Sentinel::getUser()->institution_2:
                $user = Sentinel::getUser();
                $inst = Sentinel::getUser()->institution_2;
                $institution_info = Institution::all()->where('institution_name', $inst);
                return view('print', compact('user', 'institution_info'));
                break;
            case Sentinel::getUser()->institution_3:
                $user = Sentinel::getUser();
                $inst = Sentinel::getUser()->institution_3;
                $institution_info = Institution::all()->where('institution_name', $inst);
                return view('print', compact('user', 'institution_info'));
                break;
            default:
                $error = "No institution has been selected";
                return view('print')->with('error', $error);
        }

        $inst = Sentinel::getUser()->institution;
        $institution_info = Institution::all()->where('institution_name', $inst);
        return view('print', compact('user', 'institution_info'));
    }
*/
    public function printIndividualForm()
    {
        /*
        $institutionToPrint = request()->query('institutionToPrint');
        if ($institutionToPrint)
        {
            $user = Sentinel::getUser();
            $inst = Sentinel::getUser()->institution;
            $institution_info = Institution::where('institution_name', $institutionToPrint);
            return view('print', compact('institution_info', 'user'));
        } else {
            return "Please select an institution";
        }
        */
        $user = Sentinel::getUser();
        $inst = Sentinel::getUser()->institution;
        $institution_info = Institution::all()->where('institution_name', $inst);
        return view('select-print', compact('user', 'institution_info'));
        
    }

    public function printOne(){
        $user = Sentinel::getUser();
        //$institution_info = Institution::all()->where('intitution_name', $user->institution);
        $session_id = $_COOKIE["laravel_session"];
        return view('print.print1', compact('user', 'session_id'));
    }
    public function printTwo(){
        $user = Sentinel::getUser();
        //$institution_info = Institution::all()->where('intitution_name', $user->institution);
        $session_id = $_COOKIE["laravel_session"];
        return view('print.print2', compact('user', 'session_id'));
    }
    public function printThree(){
        $user = Sentinel::getUser();
        //$institution_info = Institution::all()->where('intitution_name', $user->institution);
        $session_id = $_COOKIE["laravel_session"];
        return view('print.print3', compact('user', 'session_id'));
    }
}
