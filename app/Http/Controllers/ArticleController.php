<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {

        return view('addarticle');
    }

    public function storearticle(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'article'=>['required'],
        ]);

        //$patharticle=$request->file('article')->store('article','public');

		   $article = $request->file('article');


     $new_name = rand() . '.' . $article->getClientOriginalExtension();
     $article->move(public_path('article'), $new_name);

        Article::create([
            'name'=>$request->name,
            'patharticle'=>$new_name
        ]);
        return redirect()->back()->with('success','article ajouter ave success');
    }

    public function downloadarticle($id)
    {
        $pdfFile = Article::find($id);
        $pathtofile=public_path("article/{$pdfFile->patharticle}");
        return Response::download($pathtofile);
    }
}
