<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;

class GalleryController extends Controller
{
    public function index()
    {
        return view('addimagegallery');
    }

    public function storeimg(Request $request)
    {
        // Allowed extensions for photos and videos across all 10 slots
        $rules = [];
        for ($i = 1; $i <= 10; $i++) {
            $rules['image' . $i] = ['nullable', 'file', 'mimes:jpg,jpeg,png,svg,gif,webp,mp4,webm,mov,avi,mkv', 'max:51200'];
        }

        $request->validate($rules, [
            'mimes' => 'Le fichier doit être une image (JPG, PNG, SVG, GIF, WEBP) ou une vidéo (MP4, WEBM, MOV, AVI, MKV).',
            'max'   => 'Le fichier ne doit pas dépasser 50 Mo.',
        ]);

        $data = [];
        $hasMedia = false;

        for ($i = 1; $i <= 10; $i++) {
            $fieldName = 'image' . $i;
            if ($request->hasFile($fieldName) && $request->file($fieldName)->isValid()) {
                $file = $request->file($fieldName);
                $newName = rand() . '_' . time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('gallery'), $newName);
                $data[$fieldName] = $newName;
                $hasMedia = true;
            } else {
                $data[$fieldName] = null;
            }
        }

        if (!$hasMedia) {
            return redirect()->back()->withErrors(['image1' => 'Veuillez sélectionner au moins une photo ou une vidéo à ajouter dans la galerie.']);
        }

        gallery::create($data);

        return redirect()->back()->with('success', 'Médias (photos / vidéos) ajoutés avec succès dans la galerie !');
    }
}
