<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    //
    function addPost(Request $request){
        Post::create([
            'owner_id'=>Auth::user()->id,
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return redirect('/home');
    }
    function getAllPosts(){
        $posts=[];
        $postsResult=Post::orderBy('created_at','desc')->get();
        foreach ($postsResult as $key => $value) {
            $user = User::where('id',$value->owner_id)->get();
            $arr = array(
                'user'=>$user[0],
                'post'=>$value
            );
            array_push(
                $posts,$arr
            );
        }
        return view('/home')->with('posts',$posts);
    }
    function getPost($id){

        $post=Post::find($id);
        $user = User::where('id',$post->owner_id)->get();
        $commentArr = Comment::orderBy('created_at','desc')->where('post_id',$id)->get();
        $comments=array();
        foreach ($commentArr as $key => $value) {
            $user = User::where('id',$value->owner_id)->get();
            $arr = array(
                'user'=>$user[0],
                'comment'=>$value->content
            );
            array_push(
                $comments,$arr
            );

        }
        return view('post_view')->with('postData',[
            'post'=>$post,
            'comments'=>$comments,
            'user'=>$user[0]
    ]);
    }

    function getCurrentUserPosts(){
        $posts = Post::orderBy('created_at','desc')->where('owner_id',Auth::user()->id)->get();
        return view('my_posts')->with('posts',$posts);
    }

    function getSearchedPosts(Request $request){
        $search = $request->post_content;

        $posts=[];
        $postsResult=Post::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('content', 'LIKE', "%{$search}%")
        ->get();
        foreach ($postsResult as $key => $value) {
            $user = User::where('id',$value->owner_id)->get();
            $arr = array(
                'user'=>$user[0],
                'post'=>$value
            );
            array_push(
                $posts,$arr
            );
        }
        return view('search_result')->with('searchResult',$posts);
    }
}
