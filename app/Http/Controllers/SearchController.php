<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\SearchRecord;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;



class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = trim($request->input('query'));
      
        if (empty($query)) {
            return view('search.index', ['posts' => collect([])]);
        }
        $posts = Post::whereRaw('LOWER(title) LIKE ?', ['%' . mb_strtolower($query) . '%'])->get();
        $filteredPosts = $posts->filter(function ($post) use ($query) {
            $title = mb_strtolower($post->title);
            $similarity = levenshtein(substr($title, 0, 5), mb_strtolower(substr($query, 0, 5)));
            return $similarity <= 2;
        });

        return view('search.index', ['posts' => $filteredPosts]);
    }
}
    
