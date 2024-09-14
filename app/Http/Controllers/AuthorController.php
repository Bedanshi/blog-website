<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\models\Post;

class AuthorController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view ('home',compact ('Posts'));
    }

    public function post($slug){
        $post= Post::where('slug', '=',$slug)->firstOrFail();
        return view ('post', compact('post'));
    }
}
