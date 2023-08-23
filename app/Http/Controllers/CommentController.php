<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //

    function addComment($id,Request $request){
        Comment::create([
            'owner_id'=>Auth::user()->id,
            'post_id'=>$id,
            'owner_name'=>Auth::user()->name,
            'content'=>$request->content
        ]);
        return Redirect('/post'.'/'.$id);
    }
}
