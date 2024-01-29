<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $posts = Post::all();
        $active = User::latest();
        $suggest = User::latest()->limit(3)->get();
        $likes=Like::all()->count();
        // dd($likes);

        return view('front.index',compact('posts','active','suggest','likes'));

    }
}
