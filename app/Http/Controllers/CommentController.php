<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|max:1000',
        ]);

        Comment::create([
            'post_id' => $postId,
            'author' => auth()->user()->name ?? 'Anonymous', // 使用登录用户或匿名
            'content' => $request->input('content'),
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }
}
