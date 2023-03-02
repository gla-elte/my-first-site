<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
  public function show($post)
  {
    // return $post;

    // return view('post', compact('post'));
  //   return view('post', ['post' => $post]);

    // $var1 = 111;
    // $var2 = 'hi';
    // $var3 = true;
    // return view('post', compact('var1', 'var2', 'var3'));

    $length = Post::getLength($post);
    return view('post', compact('post', 'length'));
  }
}
