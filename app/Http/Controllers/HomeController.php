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
    // Ensure user exists before accessing 'name'
    $user = User::where('id', $value->author_id)->first();
    $value->author = $user ? $user->name : 'Unknown Author';

    // Ensure category exists before accessing 'name' and 'slug'
    $category = Category::where('id', $value->category_id)->first();
    if ($category) {
        $value->category_name = $category->name;
        $value->category_slug = $category->slug;
    } else {
        $value->category_name = 'Category unknown';
        $value->category_slug = 'Category unknown ';
    }
}

        // return response($post,200);
        return view( "index", compact("post"));
    }

    public function post($slug){
        $post= Post::where('slug', '=',$slug)->firstOrFail();
        return view ('single', compact('post'));
    }

}
