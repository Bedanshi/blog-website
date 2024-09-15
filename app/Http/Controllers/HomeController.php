<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\User;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $post = Post::get();
        foreach ($post as $value) {
            $value->author = User::where('id', $value->author_id)->first()->name;
            $category = Category::where('id', $value->category_id)->first();
            $value->category_name = $category->name;
            $value->category_slug = $category->slug;
        }
        // return response($post,200);
        return view( "index", compact("post"));
    }

    public function post($slug){
        $post= Post::where('slug', '=',$slug)->firstOrFail();
        return view ('single', compact('post'));
    }
}

