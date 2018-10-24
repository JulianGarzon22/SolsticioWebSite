<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PageController extends Controller
{
    public function inicio() {
      $landing = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->take(3)->get();
      return response($landing->jsonSerialize(), 200);
    }

    public function noticias() {
      $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(8);
      return view('web.noticias', compact('posts'));
    }

}
