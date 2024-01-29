<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function likes(Request $request)
    {

        $user = auth()->user();
        $postId = $request->input('post_id');
        $post = Post::find($postId);
        $like = Like::where(['user_id' => $user->id, 'post_id' => $postId])->first();

        if ($like) {
            $like->delete();
            $likeCount = Like::where('likes', '=', true)->get()->count();
            return response()->json([
                'status' => 200,
                'message' => 'Unliked',
                'likeCount' => $likeCount
            ]);
        } else {
            $like = new Like(['likes' => true, 'post_id' => $postId, 'user_id' => $user->id,]);
            // dd($like);
            $like->save();
            $likeCount = Like::where('likes', '=', true)->get()->count();
            return response()->json([
                'status' => 200,
                'message' => 'Liked',
                'likeCount' => $likeCount
            ]);
        }
        // dd($likeCount);


        // return response()->json(['likeCount' => $likeCount]);
    }
}
