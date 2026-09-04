<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membres;
use App\Models\Activite;

class userController extends Controller
{
    public function user()
    {
        $membre=Membres::where('position','BE')->get();
        $activitesrecentes=Activite::orderBy('created_at','desc')->limit(3)->get();
        return view('welcome',compact('membre','activitesrecentes'));
    }
}
