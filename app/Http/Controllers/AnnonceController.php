<?php

namespace App\Http\Controllers;
use App\Models\Annonce;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    public function showAnnonce(Request $request, $id){
        $annonce = Annonce::findOrFail($id);
        
        return view("recherche_annonce",["annonce"=>$annonce]);
    }
}
