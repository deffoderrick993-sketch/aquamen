<?php

namespace App\Http\Controllers;

use App\Models\Membres;
use App\Models\Activite;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function welcome()
    {
        $activitesrecentes=Activite::orderBy('created_at','desc')->limit(3)->get();
        $membre=Membres::where('position','BE')->get();


        return view('welcome',compact('activitesrecentes','membre'));
    }
}
