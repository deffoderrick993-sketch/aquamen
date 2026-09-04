<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PDF;
use App\Models\Activite;
use App\Models\Membres;
use App\Models\gallery;
use App\Models\Article;


class pageController extends Controller
{
    public function about()
    {
        $rapportrecent=PDF::orderBy('created_at','desc')->limit(4)->get();
        $allmenbre=Membres::all();
        $ct=Membres::where('position','Comité technique')->get();
        $conseillers=Membres::where('position','CONSEILLERS')->get();
        return view('pages.about',compact('rapportrecent','allmenbre','ct','conseillers'));
    }
    public function Activite()
    {
        $allactivite=Activite::all();
        return view('pages.activite',compact('allactivite'));
    }
    public function rapport()
    {
        $allrapport=PDF::all();
        $article=Article::all();
        return view('pages.rapport',compact('allrapport','article'));
    }
    public function Membre($id)
    {
        $onemenbre=Membres::findOrFail($id);
        return view('pages.detailmembre',compact('onemenbre'));
    }
    public function detailactivite($id)
    {
        $detailactivite=Activite::findOrFail($id);
        return view('pages.detailactivite',compact('detailactivite'));
    }

    public function gallery()
    {
        $allgallery=gallery::all();
        return view('pages.gallery',compact('allgallery'));
    }
    public function volontariat()
    {

        return view('pages.volontariat');
    }
    public function article()
    {
        $article=Article::all();
        return view('pages.article',compact('article'));
    }

}
