<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Controller;

use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::latest()->paginate(5);
        return view('user.cms.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.cms.page-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $user = auth()->user();
        $post = $user->posts()->create($request->sanitized());
        if ($request->image) {
            $post->addMedia($request->image)->toMediaCollection('PostImages');
        }
        // toastr()->addSuccess('New Post Added');

        return redirect(route('posts.show',$post));
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('user.cms.page-view',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('user.cms.page-edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostStoreRequest $request, Post $post)
    {
        $posts = $post->update($request->sanitized());
        if ($request->image) {
            $post->addMedia($request->image)->toMediaCollection('PostImages');
        }
        toastr()->addSuccess('Post Update Successfully');
        return redirect(route('posts.show',$post));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        toastr()->addSuccess('Post Removed');
        return redirect(route('posts.index'));
    }
    public function togglePostStatus(Post $post)
    {
        // dd(auth()->user()->roles);

        $post->status = !$post->status;
        $post->save();

        toastr()->addSuccess('Post '.($post->status ? 'Activated' : 'Deactivated'));
        // dd($user);

        return back();
    }
}
