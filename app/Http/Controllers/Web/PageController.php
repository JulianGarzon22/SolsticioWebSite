<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\File;
use App\Classified;

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

    public function post($slug) {
        $post = Post::where('slug', $slug)->first();
        return view('web.post', compact('post'));
    }

    public function archivos() {
        $files = File::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(10);
        return view('web.archivos', compact('files'));
    }

    public function clasificados() {
        $classifieds = Classified::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(8);
        return view('web.clasificados', compact('classifieds'));
    }

}
