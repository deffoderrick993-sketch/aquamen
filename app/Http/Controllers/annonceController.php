<?php

namespace App\Http\Controllers;

use App\Models\annonce;
use Illuminate\Http\Request;

class annonceController extends Controller
{
    public function storeannonce(Request $request){
        $request->validate([
            'name'=>['required'],
            'image'=>['required','mimes:png,jpg,svg,jpeg'],
            'description'=>['required'],
        ]);

           $article = $request->file('image');
     $new_name = rand() . '.' . $article->getClientOriginalExtension();
     $article->move(public_path('article'), $new_name);

     annonce::created([
        'name'=>$request->name,
        'image'=>$new_name,
        'description'=>$request->description
     ]);

    }
}
