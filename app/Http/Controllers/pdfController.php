<?php

namespace App\Http\Controllers;

use Response;
use App\Models\PDF;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function index()
    {
        return view('addrapport');
    }

    public function storerapport(Request $request)
    {
        $request->validate([
            'name'=>['required'],
            'raport'=>['required'],
        ]);



       // $pathpdf=$request->file('raport')->store('pdfs','public');


     $pdf = $request->file('raport');

     $pathpdf = rand() . '.' . $pdf->getClientOriginalExtension();
     $pdf->move(public_path('pdfs'), $pathpdf);

        PDF::create([
            'name'=>$request->name,
            'pathrapport'=>$pathpdf
        ]);

        return redirect()->back()->with('success','rapport ajouter avec sucess');
    }

    public function downloadrapport($id)
    {
        $pdfFile = PDF::find($id);
        $pathtofile=public_path("pdfs/{$pdfFile->pathrapport}");
        return Response::download($pathtofile);
    }
}
