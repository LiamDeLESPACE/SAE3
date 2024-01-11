<?php

namespace App\Http\Controllers;
use App\Models\Annonce;

use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /*public function showAnnonce(Request $request, $id){
        $annonce = Annonce::findOrFail($id);
        
        return view("recherche_annonce",["annonce"=>$annonce]);
    }*/

    public function showAnnonce(Request $request)
    {
        $key = trim($request->get('villeChoisie'));

        $posts = Post::query()
            ->where('titreannonce', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->get();

        

        $tags = Tag::all();

        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }
}
