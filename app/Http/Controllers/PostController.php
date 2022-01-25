<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
      $posts = Post::with(['category:id,name', 'user:id,name'])->get();

      return $posts;
  }
}
