<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request, $id){
        Comment::create([
            'product_id' => $id,
            'comment' => $request->comment,
            'rating' => $request->rating,
        ]);
    }
}
