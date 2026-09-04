<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activite;

class activiteController extends Controller
{
    public function index()
    {
        return view('addactivite');
    }

    public function aditactivite()
    {
        $allactivite=Activite::all();
        return view('editactivite',compact('allactivite'));
    }

      public function deleteactivite($id)
    {
        $delactivite=Activite::findOrFail($id);
        $delactivite->delete($id);
         return redirect()->back()->with('success','delete succefful');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'descrition'=>['required'],
            'image'=>['required']
        ]);

	  // $pathimage=$request->file('image')->store('images','public');

     $image = $request->file('image');

     $new_name = rand() . '.' . $image->getClientOriginalExtension();
     $image->move(public_path('images'), $new_name);

        Activite::create([
            'name'=>$request->name,
            'description'=>$request->descrition,
            'image'=>$new_name,
        ]);

        return redirect()->back()->with('success','activiter ajouter avec success');
    }

	   public function edit($id)
    {
        $oneproject=Activite::findOrFail($id);
        return view('editprojet',compact('oneproject'));
    }

    public function updateprojet(Request $request , $id)
    {
        $request->validate([
            'name'=> ['required'],
            'descrition'=> ['required'],
            'image'=> ['required'],
        ]);

        $image = $request->file('image');

        $pathimage = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $pathimage);


        Activite::where('id',$id)->update([
            'name'=>$request->name,
            'description'=>$request->descrition,
            'image'=>$pathimage
        ]);

        return redirect()->back()->with('success','activité mise a jour');
    }

}
