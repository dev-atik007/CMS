<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function website()
    {
        // dd(Post::published);
        $categories = Category::all();
        $posts = Post::where('is_publish', Post::published)->get();
        return view('website.master', compact('posts','categories'));
    }

    public function singlePage(post $post)
    {
        return view('website.single_page.page', compact('post'));
    }
}
