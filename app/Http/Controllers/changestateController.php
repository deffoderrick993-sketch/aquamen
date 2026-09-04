<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Membres;
use App\Models\Activite;
use Illuminate\Support\Facades\Auth;

class changestateController extends Controller
{
    public function changestate()
    {
        if (Auth::id()) {
            $role=Auth()->user()->role;


            if ($role == 'admin') {
             $admin =User::where('role','admin')->count();
             $visitor =User::where('role','user')->count();
             $activite =Activite::all()->count();
             $membres =Membres::all()->count();

             return view('admin',compact('admin','visitor','activite','membres'));

            }else {

              return redirect()->back();

            }
        }
    }
}
