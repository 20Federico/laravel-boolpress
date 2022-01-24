<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = Auth::user();

      return view('admin.posts.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $data = $request->validate([
        'title' => 'required | max:255', 
        'user_id' => 'required', 
        'description' => 'required',
        'body' => 'required',
        'publish_date' => 'required', 
      ]);

      $newPost = new Post;
      $newPost->title = $data['title'];
      $newPost->user_id = $data['user_id'];
      $newPost->description = $data['description'];
      $newPost->body = $data['body'];
      $newPost->publish_date = $data['publish_date'];
      $newPost->save();

      return redirect()->route('admin.posts.show', $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, User $user)
    {
      return view('admin.posts.show', [
        'post' => $post,
        'user' => $user
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      $user = Auth::user();
      
      return view('admin.posts.edit', [
        'post' => $post,
        'user' => $user
      ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
      $data = $request->validate([
        'title' => 'required | max:255', 
        'user_id' => 'required', 
        'description' => 'required',
        'body' => 'required',
        'publish_date' => 'required', 
      ]);

      $post->update($data);

      return redirect()->route('admin.posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
      $post->delete();

	    return redirect()->route('admin.posts.index');
    }
}
