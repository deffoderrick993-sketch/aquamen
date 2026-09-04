<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membres;

class membreController extends Controller
{
    public function index()
    {
        return view('addmembre');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'info'=>['required'],
            'position'=>['required'],
            'tel'=>['required','min:9'],
            'poste'=>['required'],
            'image'=>['required'],
        ]);

     //   $pathimage=$request->file('image')->store('profiles','public');

     $image = $request->file('image');


     $new_name = rand() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('profiles'), $new_name);


        Membres::create([
            'nom'=>$request->nom,
            'prenome'=>$request->prenom,
            'image'=>$new_name,
            'tel'=>$request->tel,
            'poste'=>$request->poste,
            'info'=>$request->info,
            'position'=>$request->position,

        ]);

        return redirect()->back()->with('success','membre ajouter avec success');
    }

    public function editmembre()
    {
        $editmembre=Membres::all();
        return view('editmembre',compact('editmembre'));
    }

    public function deletemembre($id)
    {
        $deletemembre=Membres::findOrFail($id);
        $deletemembre->delete($id);

        return redirect()->back()->with('success','membre radier avec success');
    }


    public function edit($id)
    {
        $onemembre=Membres::findOrFail($id);
        return view('editonemembre',compact('onemembre'));
    }


	    public function updatemembre(Request $request , $id)
    {
        $request->validate([
            'nom'=>['required'],
            'prenom'=>['required'],
            'info'=>['required'],
            'position'=>['required'],
            'tel'=>['required','min:9'],
            'image'=>['required'],
        ]);

        $image = $request->file('image');

        $pathimage = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profiles'), $pathimage);


        Membres::where('id',$id)->update([
            'nom'=>$request->nom,
            'prenome'=>$request->prenom,
            'image'=>$pathimage,
            'tel'=>$request->tel,
            'info'=>$request->info,
            'position'=>$request->position,
        ]);

        return redirect()->back()->with('success','membre modifier avec succes');
    }
}
